<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Autor;
use App\Models\Categoria;
use App\Models\Editora;
use App\Models\LivroAutor;
use App\Models\User;
use App\Models\Livro;
use Illuminate\Http\Request;
use App\Models\Logger;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class LivroController extends Controller
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
        $data['categorias'] = Categoria::all();
        $data['editoras'] = Editora::all();
        $data['autores'] = Autor::all();
        return view('admin.livro.search.index', $data);
    }
    public function index(Request $request)
    {
        

            $data["livros"] = Livro::join('categorias', 'livros.id_categoria', 'categorias.id')
                ->join('users', 'livros.id_user', 'users.id')
                ->join('editoras', 'livros.id_editora', 'editoras.id')
                ->select('users.name as user', 'categorias.nome as categoria', 'editoras.nome as editora', 'livros.*')
                ->with([
                    'livro_autors' => function ($query) {
                        $query
                            ->join('autors', 'livro_autors.id_autor', 'autors.id')->select('autors.*', 'autors.id as id_autor', 'livro_autors.*');
                    }
                ]);

           /* if ($request->id_user == "All") {
                $data["livros"] = $data["livros"];
            } else {
                $data["livros"] = $data["livros"]->where('users.id', $request->id_user);
            } */
            
            if ($request->id_categoria == "All") {
                $data["livros"] = $data["livros"];
            } else {
                $data["livros"] = $data["livros"]->where('livros.id_categoria', $request->id_categoria);
            }

            if ($request->id_editora == "All") {
                $data["livros"] = $data["livros"];
            } else {
                $data["livros"] = $data["livros"]->where('livros.id_editora', $request->id_editora);
            }


            if ($request->id_autor == "All") {
                $data["livros"] = $data["livros"];
            } else {

                $livro_autors = LivroAutor::where("id_autor",$request->id_autor)->select("id_livro")->get();

                $data["livros"] = $data["livros"]->whereIn('livros.id',$livro_autors);
            }



            if ($request->filter == "All") {
                # code...
                $data["livros"] = $data["livros"];
            } elseif ($request->filter == "day") {
                # code...

                $data["livros"] = $data["livros"]->whereDate('livros.created_at', '=', date('Y-m-d'));
                $data["day"] = date('Y-m-d');

            } elseif ($request->filter == "month") {
                # code...
                $data["livros"] = $data["livros"]->whereMonth('livros.created_at', '=', date("m", strtotime($request->month)))
                    ->whereYear('livros.created_at', '=', date("Y", strtotime($request->month)))
                ;
                $data["month"] = $request->month;
            } elseif ($request->filter == "year") {
                # code...
                $data["livros"] = $data["livros"]->whereYear('livros.created_at', '=', date("Y", strtotime($request->year)))
                ;
                $data["year"] = $request->year;
            } elseif ($request->filter == "date") {
                # code...
                $data["livros"] = $data["livros"]->whereDate('livros.created_at', '=', date("Y-m-d", strtotime($request->date)))
                ;
                $data["date"] = $request->date;
            } elseif ($request->filter == "intervalo") {
                # code...
                $data["livros"] = $data["livros"]->whereBetween('livros.created_at', [date("Y-m-d", strtotime($request->intervalo1)), date("Y-m-d", strtotime($request->intervalo2))])
                ;
                $data["intervalo1"] = $request->intervalo1;
                $data["intervalo2"] = $request->intervalo2;

            }

            $data["livros"] = $data["livros"]->get();
            //dd($data["livros"]);
        
        return view('admin.livro.index', $data);
    }

    public function create()
    {
        /* $data['users'] = User::all(); */
        $data['categorias'] = Categoria::all();
        $data['editoras'] = Editora::all();
        $data['autores'] = Autor::all();
        return view('admin.livro.create.index', $data);
    }

    public function store(Request $request)
    {
        //

         //dd($request);
        $request->validate([
            'titulo' => 'required|string|max:255',
            'id_categoria' => 'required|numeric',
            'id_editora' => 'required|numeric',


        ], [
            'titulo.required' => 'O Título é um campo obrigatório.',
            'id_categoria.required' => 'A Categoria é um campo obrigatório.',
            'id_editora.required' => 'A Editora é um campo obrigatório.',
        ]);

        try {

            $array['titulo'] = $request->titulo;
            $array['volume'] = $request->volume;
            $array['id_categoria'] = $request->id_categoria;
            $array['id_editora'] = $request->id_editora;

            if ($this->existis($array)) {
                return redirect()->back()->with("livro.create.existis", 1);
            }
            //code...
            /* $upload_img_capa = "";
            if ($request->hasFile('capa') && $request->file('capa')->isValid()) {
                # code...
                $upload_img_capa = $this->upload_img_capa($request);
            } */
            $livro = Livro::create([
                'titulo' => $request->titulo,
                'ano_lancamento' => $request->ano_lancamento,
                'volume' => $request->volume,
                'quantidade' => $request->quantidade,
                'id_user' => Auth::user()->id,
                'id_categoria' => $request->id_categoria,
                'id_editora' => $request->id_editora,
    
            ]);


            foreach ($request->id_autor as $id_autor) {
        
                LivroAutor::create([
                    'id_livro' => $livro->id,
                    'id_autor' => $id_autor,

                ]);
            }


            $this->loggerData("Cadastrou o livro de titulo $request->titulo, ano de lançamento $request->ano_lancamento, volume $request->volume , id: " . $livro->id );
            return redirect()->back()->with('livro.create.success', 1);


        } catch (\Throwable $th) {
            //throw $th;
            $this->loggerDataError($th->getMessage());
            return redirect()->back()->with('livro.create.error', 1);
        }

    }

    public function edit($id)
    {

        $data["livro"] = Livro::join('categorias', 'livros.id_categoria', 'categorias.id')
            ->join('users', 'livros.id_user', 'users.id')
            ->join('editoras', 'livros.id_editora', 'editoras.id')
            ->select('users.name as user', 'categorias.nome as categoria', 'editoras.nome as editora', 'livros.*')
            ->with([
                'livro_autors' => function ($query) {
                    $query
                        ->join('autors', 'livro_autors.id_autor', 'autors.id')->select('autors.*', 'autors.id as id_autor', 'livro_autors.*');
                }
            ])
            ->where('livros.id', $id)->get()->first();

            $data['categorias'] = Categoria::all();
            $data['editoras'] = Editora::all();
            $data['autores'] = Autor::all();
        return view('admin.livro.edit.index', $data);


    }

    public function update(Request $request, $id)
    {
        //
        //
        //dd($request);

        $a = Livro::join('categorias', 'livros.id_categoria', 'categorias.id')
            ->join('users', 'livros.id_user', 'users.id')
            ->select('users.name as user', 'categorias.nome as categoria', 'livros.*')
            ->where('livros.id', $id)->get()->first();



            $request->validate([
                'titulo' => 'required|string|max:255',
                'id_categoria' => 'required|numeric',
                'id_editora' => 'required|numeric',
    
    
            ], [
                'titulo.required' => 'O Título é um campo obrigatório.',
                'id_categoria.required' => 'A Categoria é um campo obrigatório.',
                'id_editora.required' => 'A Editora é um campo obrigatório.',
            ]);

        try {

            $array['titulo'] = $request->titulo;
            $array['volume'] = $request->volume;
            $array['id_categoria'] = $request->id_categoria;
            $array['id_editora'] = $request->id_editora;

           /*  if (!($request->hasFile('capa') && $request->file('capa')->isValid())) { */
                /* if ($this->existis($array)) {
                    return redirect()->back()->with("livro.update.existis", 1);
                } */
            /* } */
            //code...
           /*  $upload_img_capa = $a->capa;
            if ($request->hasFile('capa') && $request->file('capa')->isValid()) {
                # code...
                $upload_img_capa = $this->upload_img_capa($request);
            } */

            $livro = Livro::findOrFail($id)->update([
                'titulo' => $request->titulo,
                'ano_lancamento' => $request->ano_lancamento,
                'volume' => $request->volume,
                'quantidade' => $request->quantidade,
                'id_categoria' => $request->id_categoria,
                'id_editora' => $request->id_editora,
    
            ]);

            //dd($request->id_autor);
            $livro1 = Livro::find($id);
            $delete = LivroAutor::where('id_livro',$livro1->id)->whereNotIn('id_autor',$request->id_autor)->delete();
            foreach ($request->id_autor as $id_autor) {
                
                $existis = LivroAutor::where('id_livro',$livro1->id)->where('id_autor',$id_autor)->first();
                if (!$existis) {
                    # code...
                    LivroAutor::create([
                        'id_livro' => $livro1->id,
                        'id_autor' => $id_autor,
    
                    ]);
                }
               
            }


            $this->loggerData("Editou o livro de id, titulo, ano de lançamento e volume($a->id ; $a->titulo; $a->ano_lancamento, $a->volume) para ($request->titulo; $request->ano_lancamento, $request->volume)");
            return redirect()->back()->with('livro.update.success', 1);

        } catch (\Throwable $th) {
            //throw $th;
            $this->loggerDataError($th->getMessage());
            return redirect()->back()->with('livro.update.error', 1);
        }
    }

    public function destroy($id)
    {
        //
        try {
            //code...
            if (Auth::user()->perfil == 'Administrador') {
                $livro = Livro::findOrFail($id);


                Livro::findOrFail($id)->delete();
                $this->loggerData("Eliminou o livro de id, titulo, ano de lançamento e volume($livro->id ; $livro->titulo; $livro->ano_lancamento; $livro->volume)");
                return redirect()->back()->with('livro.destroy.success', 1);
            } else {
                abort(403);
            }
        } catch (\Throwable $th) {
            //throw $th;
            $this->loggerDataError($th->getMessage());
            return redirect()->back()->with('livro.destroy.error', 1);
        }
    }

    public function purge($id)
    {
        //
        try {
            if (Auth::user()->perfil == 'Administrador') {

                //code...
                $livro = Livro::findOrFail($id);


                Livro::findOrFail($id)->forceDelete();
                $this->loggerData("Purgou o livro de id, titulo, ano de lançamento e volume($livro->id ; $livro->titulo; $livro->ano_lancamento; $livro->volume)");
                return redirect()->back()->with('livro.purge.success', 1);
            } else {
                abort(403);
            }
        } catch (\Throwable $th) {
            //throw $th;
            $this->loggerDataError($th->getMessage());
            return redirect()->back()->with('livro.purge.error', 1);
        }
    }




    public function upload_img_capa(Request $request)
    {

        # code...
        try {

            $name = uniqid(date('HisYmd'));
            $image = $request->capa;
            // Recupera a extensão do arquivo
            $extension = $image->extension();
            $nameFile = "{$name}.{$extension}";
            $destinationPath = public_path("/images/livros/");
            $image->move($destinationPath, $nameFile);
            $upload = "/images/livros/" . $nameFile;

            return $upload;

        } catch (\Throwable $th) {
            //throw $th;
            $this->loggerDataError($th->getMessage());
            return redirect()
                ->back()
                ->with('error', 'Falha ao fazer upload')
                ->withInput();
        }
    }

    public function existis($array)
    {

        return Livro::where($array)->count();
    }

    public function updateDisponibilidade($id, $disponibilidade)
    {
        $dest_position = strpos($id, 'dest') + 4;
        $id = intval(substr($id, $dest_position));

        $a = Livro::find($id);
        $livro = Livro::find($id)->update(['disponibilidade' => $disponibilidade]);
        $this->loggerData(" Editou o estado de disponibilidade do livro  de id, estado, ($a->id, $a->disponibilidade) para ($disponibilidade)");
        return response()->json($livro);
    }

  
}