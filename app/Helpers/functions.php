<?php
use App\Models\LivroAutor;



function getAutores($id_livro){

  //dd($id_livro);
  $autores = LivroAutor::join('autors', 'livro_autors.id_autor', 'autors.id')->select('autors.*', 'autors.id as id_autor', 'livro_autors.*')->where('livro_autors.id_livro',$id_livro)->get();

  return   $autores;
}