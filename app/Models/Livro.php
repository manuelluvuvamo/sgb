<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Livro extends Model
{
    use HasFactory;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'titulo',
        'disponibilidade',
        'ano_lancamento',
        'volume',
        'quantidade',
        'id_editora',
        'id_categoria',
        'id_user',
     

    ];
    protected $dates = ['deleted_at'];

    public function livro_autors(){
        return $this->hasMany(LivroAutor::class, 'id_livro', 'id');
    }
}
