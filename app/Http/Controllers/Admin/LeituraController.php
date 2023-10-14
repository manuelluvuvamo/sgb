<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Leitura;
use App\Models\Livro;
use App\Models\LivroEmprestimo;
use App\Models\Professor;
use App\Models\EmprestimoLivro;
use App\Models\User;
use App\Models\Emprestimo;
use Illuminate\Http\Request;
use App\Models\Logger;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class LeituraController extends Controller
{
    //
    public function __construct()
    {

        $this->Logger = new Logger();
    }
    public function loggerData($mensagem)
    {

        $this->Logger->Log('info', $mensagem);
    }
    public function loggerDataError($mensagem)
    {

        $this->Logger->Log('error', $mensagem);
    }

    public function search()
    {
        /* $data['users'] = User::all(); */
        /* $data['professors'] = Professor::all(); */
        $data['livros'] = Livro::all();

        //dd($data);
        return view('admin.leitura.search.index', $data);
    }
    public function index(Request $request)
    {
        

            $data["leituras"] = Leitura::join('livros', 'leituras.id_livro', 'livros.id')
            ->join('editoras', 'livros.id_editora', 'editoras.id')
                ->select('editoras.nome as editora','livros.*','livros.id as id_livro', 'leituras.*');
               

           
            
            

            if ($request->id_livro == "All") {
                $data["leituras"] = $data["leituras"];
            } else {
                $data["leituras"] = $data["leituras"]->where('leituras.id_professor', $request->id_livro);
            }


           



            if ($request->filter == "All") {
                # code...
                $data["leituras"] = $data["leituras"];
            } elseif ($request->filter == "day") {
                # code...

                $data["leituras"] = $data["leituras"]->whereDate('leituras.created_at', '=', date('Y-m-d'));
                $data["day"] = date('Y-m-d');

            } elseif ($request->filter == "month") {
                # code...
                $data["leituras"] = $data["leituras"]->whereMonth('leituras.created_at', '=', date("m", strtotime($request->month)))
                    ->whereYear('leituras.created_at', '=', date("Y", strtotime($request->month)))
                ;
                $data["month"] = $request->month;
            } elseif ($request->filter == "year") {
                # code...
                $data["leituras"] = $data["leituras"]->whereYear('leituras.created_at', '=', date("Y", strtotime($request->year)))
                ;
                $data["year"] = $request->year;
            } elseif ($request->filter == "date") {
                # code...
                $data["leituras"] = $data["leituras"]->whereDate('leituras.created_at', '=', date("Y-m-d", strtotime($request->date)))
                ;
                $data["date"] = $request->date;
            } elseif ($request->filter == "intervalo") {
                # code...
                $data["leituras"] = $data["leituras"]->whereBetween('leituras.created_at', [date("Y-m-d", strtotime($request->intervalo1)), date("Y-m-d", strtotime($request->intervalo2))])
                ;
                $data["intervalo1"] = $request->intervalo1;
                $data["intervalo2"] = $request->intervalo2;

            }

            $data["leituras"] = $data["leituras"]->get();
            //dd($data["livros"]);
            //dd($data["leituras"]);
        return view('admin.leitura.index', $data);
    }

    public function create()
    {
        /* $data['users'] = User::all(); */
        /* $data['professors'] = Professor::all(); */
        $data['livros'] =Livro::join('editoras', 'livros.id_editora', 'editoras.id')
        ->select('editoras.nome as editora', 'livros.*')->get();
        return view('admin.leitura.create.index', $data);
    }

    public function store(Request $request)
    {
        //

         //dd($request);
        $request->validate([
         
            'data' => 'required',
            'nome' => 'required',
            'bi' => 'required',
            'id_livro' => 'required|numeric',


        ], [
            
            'data.required' => 'A data de leitura é um campo obrigatório.',
            'nome.required' => 'O nome do leitor é um campo obrigatório.',
            'bi.required' => 'BI do leitor é um campo obrigatório.',
            'id_livro.required' => 'O livro é um campo obrigatório.',
        ]);

      /*   try { */

            $array['data'] = $request->data;
            $array['bi'] = $request->bi;
            $array['id_livro'] = $request->id_livro;
             
            $this->verificar_disponibilidade_livro($request->id_livro);

            if ($this->existis($array)) {
                return redirect()->back()->with("leitura.create.existis", 1);
            }
           
            $leitura = Leitura::create([
                'data' => $request->data ? $request->data : date("Y-m-d H:i:s"),
                'nome' => $request->nome,
                'bi' => $request->bi,
                'id_livro' => $request->id_livro,
                'id_user' => Auth::user()->id,
    
            ]);


            
                $livro = Livro::find($request->id_livro);
              
                
                Livro::find($request->id_livro)->update([
                    "quantidade" => ($livro->quantidade-1)
                ]);
            

            $professor = Professor::find($request->id_professor);
            $this->loggerData("Resgistrou a leitura de id $leitura->id para o  $leitura->nome".'.');


            $data["leitura"] = Leitura::join('livros', 'leituras.id_livro', 'livros.id')
            ->join('editoras', 'livros.id_editora', 'editoras.id')
            ->select('editoras.nome as editora','livros.*','livros.id as id_livro', 'leituras.*')
            
            ->where('leituras.id', $leitura->id)->get()->first();

            $mpdf = new \Mpdf\Mpdf(['orientation' => 'P']);
                $date = date('d-m-Y');


                $css = file_get_contents("css/bootstrap.min.css");
                $css1 = file_get_contents("css/style.css");

                $html = view("admin.pdfs.leitura.ficha.index", $data);
                ini_set('pcre.backtrack_limit', 2000000); // ou 3000000


               /*  try { */
                    $mpdf->SetHTMLFooter('<h5><div class="text-left">' . $date . '</div></h5>');
                    $mpdf->WriteHTML($css, \Mpdf\HTMLParserMode::HEADER_CSS);
                    $mpdf->WriteHTML($css1, \Mpdf\HTMLParserMode::HEADER_CSS);
                    //ini_set('max_execution_time', '300');
                    //ini_set("pcre.backtrack_limit", "5000000");
                    $mpdf->WriteHTML($html, \Mpdf\HTMLParserMode::HTML_BODY);
                    $mpdf->Output("Ficha de Leitura", "I");
                /* } catch (\Throwable $th) {
                    //throw $th;
                    $this->loggerDataError($th->getMessage());
                    return redirect()->back()->with("leitura.print.false", 1);
                } */



            /* return redirect()->back()->with('leitura.create.success', 1); */


        /* } catch (\Throwable $th) {
            //throw $th;
            $this->loggerDataError($th->getMessage());
            return redirect()->back()->with('leitura.create.error', 1);
        } */

    }

    public function edit($id)
    {

        $data["leitura"] = Leitura::join('livros', 'leituras.id_livro', 'livros.id')
        ->join('editoras', 'livros.id_editora', 'editoras.id')
        ->select('editoras.nome as editora','livros.*','livros.id as id_livro', 'leituras.*')
            ->where('leituras.id', $id)->get()->first();

          
            $data['livros'] = Livro::all();

            //dd( $data["emprestimo"]);
        return view('admin.leitura.edit.index', $data);


    }

    public function update(Request $request, $id)
    {
        //
        //
        //dd($request);

        $a = Leitura::join('livros', 'leituras.id_livro', 'livros.id')
        ->join('editoras', 'livros.id_editora', 'editoras.id')
        ->select('editoras.nome as editora','livros.*','livros.id as id_livro', 'leituras.*')
        
            ->where('leituras.id', $id)->get()->first();



            $request->validate([
         
                'data' => 'required',
                'nome' => 'required',
                'bi' => 'required',
                'id_livro' => 'required|numeric',
    
    
            ], [
                
                'data.required' => 'A data de leitura é um campo obrigatório.',
                'nome.required' => 'O nome do leitor é um campo obrigatório.',
                'bi.required' => 'BI do leitor é um campo obrigatório.',
                'id_livro.required' => 'O livro é um campo obrigatório.',
            ]);
    

        try {

            $this->verificar_disponibilidade_livro($request->id_livro);

          

            $leitura = Leitura::findOrFail($id)->update([
                'data' => $request->data ,
                'nome' => $request->nome,
                'bi' => $request->bi,
                'id_livro' => $request->id_livro,
            ]);

            //dd($request->id_autor);
            $leitura1 = Leitura::find($id);
         
          
         
            $this->loggerData("Editou o registro de leitura de id, bi, nome do leitor ($a->id ; $a->bi, $a->nome) para ($leitura1->bi $leitura1->nome)");
            return redirect()->back()->with('leitura.update.success', 1);

        } catch (\Throwable $th) {
            //throw $th;
            $this->loggerDataError($th->getMessage());
            return redirect()->back()->with('leitura.update.error', 1);
        }
    }

    public function destroy($id)
    {
        //
        try {
            //code...
            if (Auth::user()->perfil == 'Administrador') {
                $leitura = Leitura::findOrFail($id);


                Leitura::findOrFail($id)->delete();

                $livro = Livro::find($leitura->id_livro);
               
                
                $this->loggerData("Eliminou o registro de leitura de id, bi, nome do leitor ($leitura->id ; $leitura->bi, $leitura->nome)");
                return redirect()->back()->with('leitura.destroy.success', 1);
            } else {
                abort(403);
            }
        } catch (\Throwable $th) {
            //throw $th;
            $this->loggerDataError($th->getMessage());
            return redirect()->back()->with('leitura.destroy.error', 1);
        }
    }

    public function purge($id)
    {
        //
        try {
            if (Auth::user()->perfil == 'Administrador') {
                $leitura = Leitura::findOrFail($id);


                Leitura::findOrFail($id)->forceDelete();

                $livro = Livro::find($leitura->id_livro);
               
                
                $this->loggerData("Purgou o o registro de leitura de id, bi, nome do leitor ($leitura->id ; $leitura->bi, $leitura->nome)");
                return redirect()->back()->with('leitura.purge.success', 1);
            } else {
                abort(403);
            }
        } catch (\Throwable $th) {
            //throw $th;
            $this->loggerDataError($th->getMessage());
            return redirect()->back()->with('leitura.purge.error', 1);
        }
    }




    public function existis($array)
    {

        return Leitura::where($array)->count();
    }

    public function updateEstado($id, $estado)
    {
        $dest_position = strpos($id, 'dest') + 4;
        $id = intval(substr($id, $dest_position));

        $a = Leitura::find($id);

       
           
            $livro = Livro::find($a->id_livro);
                 
            if ($estado == 1) {
                Livro::find($a->id_livro)->update([
                    "quantidade" => ($livro->quantidade+1)
                ]);
            }else {
                Livro::find($a->id_livro)->update([
                    "quantidade" => ($livro->quantidade-1)
                ]);
            }
        






        $leitura = Leitura::find($id)->update(['estado' => $estado]);
        $this->loggerData(" Editou o estado do registro de Leitura  de id, estado, ($a->id, $a->estado) para ($estado)");
        return response()->json($leitura);
    }


    public function imprirFicha($id)
    {
       
            try {
                //code...
                $data["leitura"] = Leitura::join('livros', 'leituras.id_livro', 'livros.id')
                ->join('editoras', 'livros.id_editora', 'editoras.id')
                ->select('editoras.nome as editora','livros.*','livros.id as id_livro', 'leituras.*')
            ->where('leituras.id', $id)->get()->first();

            $mpdf = new \Mpdf\Mpdf(['orientation' => 'P']);
                $date = date('d-m-Y');


                $css = file_get_contents("css/bootstrap.min.css");
                $css1 = file_get_contents("css/style.css");

                $html = view("admin.pdfs.leitura.ficha.index", $data);
                ini_set('pcre.backtrack_limit', 2000000); // ou 3000000


                try {
                    $mpdf->SetHTMLFooter('<div style="margin-left:450px;text-align:center;"> ______________________________<br><br>'.$data["leitura"]->user.'</div> <h5><div class="text-left">' . $date . '</div></h5>');
                    $mpdf->WriteHTML($css, \Mpdf\HTMLParserMode::HEADER_CSS);
                    $mpdf->WriteHTML($css1, \Mpdf\HTMLParserMode::HEADER_CSS);
                    //ini_set('max_execution_time', '300');
                    //ini_set("pcre.backtrack_limit", "5000000");
                    $mpdf->WriteHTML($html, \Mpdf\HTMLParserMode::HTML_BODY);
                    $mpdf->Output("Ficha de Leitura", "I");
                } catch (\Throwable $th) {
                    //throw $th;
                    $this->loggerDataError($th->getMessage());
                    return redirect()->back()->with("leitura.imprimir.ficha.false", 1);
                }
   
            } catch (\Throwable $th) {
                return redirect()->back()->with("leitura.imprimir.ficha3.false", 1);
            }
    }

    public function verificar_disponibilidade_livro($id_livro){
        $mensagem = "";
        $livros = [];
        $livros["quantidade"] = [];
        $livros["disponibilidade"] = [];
      
            $livro = Livro::find($id_livro);

            //dd($livro);
           
            if($livro->quantidade == 0){
                array_push($livros["quantidade"], $livro);
            }else if($livro->disponibilidade == 0){
                array_push($livros["disponibilidade"], $livro);
            }
        

       

        if(count($livros["quantidade"]) > 0){
            $mensagem = (count($livros["quantidade"]) > 1)?"Os livros: ": "O livro: ";

            foreach ($livros["quantidade"] as $key => $livro) {
                if ($key != 0){
                    $mensagem.= ", ";
                }
                $mensagem.= $livro->titulo;
            }

            $mensagem .= (count($livros["quantidade"]) > 1)?", não possuem exemplares suficientes para leitura. ": ", não possui exemplares suficientes para leitura. ";
        }

        if(count($livros["disponibilidade"]) > 0){
            $mensagem .= (count($livros["disponibilidade"]) > 1)?"Os livros: ": "O livro: ";

            foreach ($livros["disponibilidade"] as $key => $livro) {
                if ($key != 0){
                    $mensagem.= ", ";
                }
                $mensagem.= $livro->titulo;
            }

            $mensagem .= (count($livros["disponibilidade"]) > 1)?", não estão disponíveis. ": ", não está disponível. ";
        }
        //dd($mensagem);
        if(count($livros["quantidade"]) > 0 || count($livros["disponibilidade"]) > 0){
            //dd("fpo");
        return redirect()->back()->with('leitura.create.error.disponibilidade',$mensagem );
        }
    }
  
}