<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;

use App\Models\Livro;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function index(){
      
        $data["livros"] = Livro::join('categorias', 'livros.id_categoria', 'categorias.id')
        ->join('users', 'livros.id_user', 'users.id')
        ->join('editoras', 'livros.id_editora', 'editoras.id')
        ->select('users.name as user', 'categorias.nome as categoria', 'editoras.nome as editora', 'livros.*')
        ->with([
            'livro_autors' => function ($query) {
                $query
                    ->join('autors', 'livro_autors.id_autor', 'autors.id')->select('autors.*', 'autors.id as id_autor', 'livro_autors.*');
            }
        ])->paginate(6);

        return view("site.index",$data);
    }
}
