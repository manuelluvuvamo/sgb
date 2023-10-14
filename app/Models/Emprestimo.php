<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Emprestimo extends Model
{
    use HasFactory;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'data_levantamento',
        'data_entrega',
        'id_professor',
        'estado',
        'id_user'
    ];

    protected $dates = ['deleted_at'];

    public function livro_emprestimos()
    {
        return $this->hasMany(LivroEmprestimo::class, 'id_emprestimo', 'id');
    }
}