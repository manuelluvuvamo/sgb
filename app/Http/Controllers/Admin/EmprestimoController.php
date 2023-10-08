<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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

class EmprestimoController extends Controller
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
        $data['professors'] = Professor::all();
        $data['livros'] = Livro::all();

        //dd($data);
        return view('admin.emprestimo.search.index', $data);
    }
    public function index(Request $request)
    {
        

            $data["emprestimos"] = Emprestimo::join('professors', 'emprestimos.id_professor', 'professors.id')
                ->select('professors.primeiro_nome','professors.sobrenome', 'emprestimos.*')
                ->with([
                    'livro_emprestimos' => function ($query) {
                        $query
                            ->join('livros', 'livro_emprestimos.id_livro', 'livros.id')->select('livros.*', 'livros.id as id_livro', 'livro_emprestimos.*');
                    }
                ]);

           
            
            

            if ($request->id_professor == "All") {
                $data["emprestimos"] = $data["emprestimos"];
            } else {
                $data["emprestimos"] = $data["emprestimos"]->where('emprestimos.id_professor', $request->id_professor);
            }


            if ($request->id_livro == "All") {
                $data["emprestimos"] = $data["emprestimos"];
            } else {

                $livro_lemprestimos = LivroEmprestimo::where("id_livro",$request->id_livro)->select("id_emprestimo")->get();

                $data["emprestimos"] = $data["emprestimos"]->whereIn('emprestimos.id',$livro_lemprestimos);
            }



            if ($request->filter == "All") {
                # code...
                $data["emprestimos"] = $data["emprestimos"];
            } elseif ($request->filter == "day") {
                # code...

                $data["emprestimos"] = $data["emprestimos"]->whereDate('emprestimos.created_at', '=', date('Y-m-d'));
                $data["day"] = date('Y-m-d');

            } elseif ($request->filter == "month") {
                # code...
                $data["emprestimos"] = $data["emprestimos"]->whereMonth('emprestimos.created_at', '=', date("m", strtotime($request->month)))
                    ->whereYear('emprestimos.created_at', '=', date("Y", strtotime($request->month)))
                ;
                $data["month"] = $request->month;
            } elseif ($request->filter == "year") {
                # code...
                $data["emprestimos"] = $data["emprestimos"]->whereYear('emprestimos.created_at', '=', date("Y", strtotime($request->year)))
                ;
                $data["year"] = $request->year;
            } elseif ($request->filter == "date") {
                # code...
                $data["emprestimos"] = $data["emprestimos"]->whereDate('emprestimos.created_at', '=', date("Y-m-d", strtotime($request->date)))
                ;
                $data["date"] = $request->date;
            } elseif ($request->filter == "intervalo") {
                # code...
                $data["emprestimos"] = $data["emprestimos"]->whereBetween('emprestimos.created_at', [date("Y-m-d", strtotime($request->intervalo1)), date("Y-m-d", strtotime($request->intervalo2))])
                ;
                $data["intervalo1"] = $request->intervalo1;
                $data["intervalo2"] = $request->intervalo2;

            }

            $data["emprestimos"] = $data["emprestimos"]->get();
            //dd($data["livros"]);
            //dd($data["emprestimos"]);
        return view('admin.emprestimo.index', $data);
    }

    public function create()
    {
        /* $data['users'] = User::all(); */
        $data['professors'] = Professor::all();
        $data['livros'] = Livro::all();
        return view('admin.emprestimo.create.index', $data);
    }

    public function store(Request $request)
    {
        //

         //dd($request);
        $request->validate([
         
            'data_entrega' => 'required',
            'id_professor' => 'required|numeric',


        ], [
            
            'data_entrega.required' => 'A data de entrega é um campo obrigatório.',
            'id_professor.required' => 'A Professor é um campo obrigatório.',
        ]);

        try {

            $array['data_levantamento'] = $request->data_levantamento;
            $array['data_entrega'] = $request->data_entrega;
            $array['id_professor'] = $request->id_professor;

            if ($this->existis($array)) {
                return redirect()->back()->with("emprestimo.create.existis", 1);
            }
           
            $emprestimo = Emprestimo::create([
                'data_levantamento' => $request->data_levantamento ? $request->data_levantamento : date("Y-m-d H:i:s"),
                'data_entrega' => $request->data_entrega,
                'id_professor' => $request->id_professor,
    
            ]);


            foreach ($request->id_livro as $id_livro) {
        
                LivroEmprestimo::create([
                    'id_emprestimo' => $emprestimo->id,
                    'id_livro' => $id_livro,

                ]);
            }

            $professor = Professor::find($request->id_professor);
            $this->loggerData("Resgistrou o empréstimo de id $emprestimo->id para o professor $professor->primeiro_nome $professor->sobrenome".'.');


            $data["emprestimo"] = Emprestimo::join('professors', 'emprestimos.id_professor', 'professors.id')
                ->select('professors.primeiro_nome','professors.sobrenome', 'emprestimos.*')
                ->with([
                    'livro_emprestimos' => function ($query) {
                        $query
                            ->join('livros', 'livro_emprestimos.id_livro', 'livros.id')->select('livros.*', 'livros.id as id_livro', 'livro_emprestimos.*');
                    }
                ])
            ->where('emprestimos.id', $emprestimo->id)->get()->first();

            $mpdf = new \Mpdf\Mpdf(['orientation' => 'P']);
                $date = date('d-m-Y');


                $css = file_get_contents("css/bootstrap.min.css");
                $css1 = file_get_contents("css/style.css");

                $html = view("admin.pdfs.emprestimo.ficha.index", $data);
                ini_set('pcre.backtrack_limit', 2000000); // ou 3000000


                try {
                    $mpdf->SetHTMLFooter('<h5><div class="text-left">' . $date . '</div></h5>');
                    $mpdf->WriteHTML($css, \Mpdf\HTMLParserMode::HEADER_CSS);
                    $mpdf->WriteHTML($css1, \Mpdf\HTMLParserMode::HEADER_CSS);
                    //ini_set('max_execution_time', '300');
                    //ini_set("pcre.backtrack_limit", "5000000");
                    $mpdf->WriteHTML($html, \Mpdf\HTMLParserMode::HTML_BODY);
                    $mpdf->Output("Relatório de Actividades", "I");
                } catch (\Throwable $th) {
                    //throw $th;
                    $this->loggerDataError($th->getMessage());
                    return redirect()->back()->with("emprestimo.print.false", 1);
                }



            return redirect()->back()->with('emprestimo.create.success', 1);


        } catch (\Throwable $th) {
            //throw $th;
            $this->loggerDataError($th->getMessage());
            return redirect()->back()->with('emprestimo.create.error', 1);
        }

    }

    public function edit($id)
    {

        $data["emprestimo"] = Emprestimo::join('professors', 'emprestimos.id_professor', 'professors.id')
                ->select('professors.primeiro_nome','professors.sobrenome', 'emprestimos.*')
                ->with([
                    'livro_emprestimos' => function ($query) {
                        $query
                            ->join('livros', 'livro_emprestimos.id_livro', 'livros.id')->select('livros.*', 'livros.id as id_livro', 'livro_emprestimos.*');
                    }
                ])
            ->where('emprestimos.id', $id)->get()->first();

            $data['professors'] = Professor::all();
            $data['livros'] = Livro::all();

            //dd( $data["emprestimo"]);
        return view('admin.emprestimo.edit.index', $data);


    }

    public function update(Request $request, $id)
    {
        //
        //
        //dd($request);

        $a = Emprestimo::join('professors', 'emprestimos.id_professor', 'professors.id')
        ->select('professors.primeiro_nome','professors.sobrenome', 'emprestimos.*')
        ->with([
            'livro_emprestimos' => function ($query) {
                $query
                    ->join('livros', 'livro_emprestimos.id_livro', 'livros.id')->select('livros.*', 'livros.id as id_livro', 'livro_emprestimos.*');
            }
        ])
            ->where('emprestimos.id', $id)->get()->first();



            $request->validate([
         
                'data_entrega' => 'required',
                'data_levantamento' => 'required',
                'id_professor' => 'required|numeric',
    
    
            ], [
                
                'data_levantamento.required' => 'A data de levantamento é um campo obrigatório.',
                'data_entrega.required' => 'A data de entrega é um campo obrigatório.',
                'id_professor.required' => 'A Professor é um campo obrigatório.',
            ]);

        try {

            $array['data_levantamento'] = $request->data_levantamento;
            $array['data_entrega'] = $request->data_entrega;
            $array['id_professor'] = $request->id_professor;
       

            $emprestimo = Emprestimo::findOrFail($id)->update([
                'data_levantamento' => $request->data_levantamento,
                'data_entrega' => $request->data_entrega,
                'id_professor' => $request->id_professor,
            ]);

            //dd($request->id_autor);
            $emprestimo1 = Emprestimo::find($id);
            $delete = LivroEmprestimo::where('id_emprestimo',$emprestimo1->id)->whereNotIn('id_livro',$request->id_livro)->delete();
            foreach ($request->id_livro as $id_livro) {
                
                $existis = LivroEmprestimo::where('id_emprestimo',$emprestimo1->id)->where('id_livro',$id_livro)->first();
                if (!$existis) {
                    # code...
                    LivroEmprestimo::create([
                        'id_emprestimo' => $emprestimo1->id,
                        'id_livro' => $id_livro,
    
                    ]);
                }
               
            }

            $professor = Professor::find($a->id_professor);
            $professorNovo = Professor::find($request->id_professor);
            $this->loggerData("Editou o emprestimo de id, professor ($a->id ; $professor->primeiro_nome $professor->sobrenome) para ($professorNovo->primeiro_nome $professorNovo->sobrenome)");
            return redirect()->back()->with('emprestimo.update.success', 1);

        } catch (\Throwable $th) {
            //throw $th;
            $this->loggerDataError($th->getMessage());
            return redirect()->back()->with('emprestimo.update.error', 1);
        }
    }

    public function destroy($id)
    {
        //
        try {
            //code...
            if (Auth::user()->perfil == 'Administrador') {
                $emprestimo = Emprestimo::findOrFail($id);


                Emprestimo::findOrFail($id)->delete();

                $professor = Professor::find($emprestimo->id_professor);
               
                
                $this->loggerData("Eliminou o emprestimo de id, professor($emprestimo->id ; $professor->primeiro_nome $professor->sobrenome)");
                return redirect()->back()->with('emprestimo.destroy.success', 1);
            } else {
                abort(403);
            }
        } catch (\Throwable $th) {
            //throw $th;
            $this->loggerDataError($th->getMessage());
            return redirect()->back()->with('emprestimo.destroy.error', 1);
        }
    }

    public function purge($id)
    {
        //
        try {
            if (Auth::user()->perfil == 'Administrador') {
                $emprestimo = Emprestimo::findOrFail($id);


                Emprestimo::findOrFail($id)->forceDelete();

                $professor = Professor::find($emprestimo->id_professor);
               
                
                $this->loggerData("Purgou o emprestimo de id, professor($emprestimo->id ; $professor->primeiro_nome $professor->sobrenome)");
                return redirect()->back()->with('emprestimo.purge.success', 1);
            } else {
                abort(403);
            }
        } catch (\Throwable $th) {
            //throw $th;
            $this->loggerDataError($th->getMessage());
            return redirect()->back()->with('emprestimo.purge.error', 1);
        }
    }




    public function existis($array)
    {

        return Emprestimo::where($array)->count();
    }

    public function updateEstado($id, $estado)
    {
        $dest_position = strpos($id, 'dest') + 4;
        $id = intval(substr($id, $dest_position));

        $a = Emprestimo::find($id);
        $emprestimo = Emprestimo::find($id)->update(['estado' => $estado]);
        $this->loggerData(" Editou o estado do emprestimo  de id, estado, ($a->id, $a->estado) para ($estado)");
        return response()->json($emprestimo);
    }

  
}