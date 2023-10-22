<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Autor;
use App\Models\Editora;
use App\Models\Emprestimo;
use App\Models\Leitura;
use App\Models\Livro;
use App\Models\Professor;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class HomeController extends Controller
{
    //
    public function dash(){
         $data['ttl_utilizadores']= User::count();
         $data['ttl_autores']= Autor::count();
         $data['ttl_editoras']= Editora::count();
         $data['ttl_professores']= Professor::count();
         $data['ttl_livros']= Livro::count();
         $data['ttl_emprestimos']= Emprestimo::count();
         $data['ttl_leituras']= Leitura::count();

        /*  $data["emprestimos"] = Emprestimo::join('professors', 'emprestimos.id_professor', 'professors.id')
                ->select('professors.primeiro_nome','professors.sobrenome', 'emprestimos.*')
                ->with([
                    'livro_emprestimos' => function ($query) {
                        $query
                            ->join('livros', 'livro_emprestimos.id_livro', 'livros.id')->select('livros.*', 'livros.id as id_livro', 'livro_emprestimos.*');
                    }
                ])->get(); */
        
            $data["leituras"] = Leitura::join('livros', 'leituras.id_livro', 'livros.id')
                ->join('editoras', 'livros.id_editora', 'editoras.id')
                    ->select('editoras.nome as editora','livros.*','livros.id as id_livro', 'leituras.*')
                    
                    ->get();
            
                   
            $teste = [];
           
            foreach($data["leituras"] as $leitura){
                $teste[$leitura->id_livro] = Leitura::where("id_livro", $leitura->id_livro)->count();
            }
            
            $mais_lido_key = null;
            $mais_lido_valor = null;
            foreach ($teste as $key => $value) {
                # code...
                if ($value >  $mais_lido_valor) {
                    $mais_lido_valor = $value;
                    $mais_lido_key = $key;
                }

            }

            $data["livro_mais_lido"] = Livro::join('categorias', 'livros.id_categoria', 'categorias.id')
            ->join('editoras', 'livros.id_editora', 'editoras.id')
            ->select('categorias.nome as categoria', 'editoras.nome as editora', 'livros.*')
            ->with([
                'livro_autors' => function ($query) {
                    $query
                        ->join('autors', 'livro_autors.id_autor', 'autors.id')->select('autors.*', 'autors.id as id_autor', 'livro_autors.*');
                }
            ])->where("livros.id", $mais_lido_key)->first();

            $data["livro_mais_lido_valor"] = $mais_lido_valor;
           
            //dd(  $data["livro_mais_lido"]);
       /*   $data['ttl_livro_mais_emprestado']= livro_mais_emprestado::count();
         $data['ttl_livro_mais_lido']= livro_mais_lido::count(); */
        return view('admin.dashboard', $data);
    }
}
