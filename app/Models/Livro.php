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

    public function livro_autors()
    {
        return $this->hasMany(LivroAutor::class, 'id_livro', 'id');
    }

    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'id_categoria', 'id');
    }

    public function editora()
    {
        return $this->belongsTo(Editora::class, 'id_editora', 'id');
    }

    public function scopeSearch($query, $value)
    {
        if (!is_null($value)) {
            $query->where('titulo', 'LIKE', '%' . $value . '%')
                ->orWhere('volume', 'LIKE', '%' . $value . '%')
                ->orWhereHas('categoria', function ($query) use ($value) {
                    $query->where('nome', 'LIKE', '%' . $value . '%');
                })
                ->orWhereHas('editora', function ($query) use ($value) {
                    $query->where('name', 'LIKE', '%' . $value . '%');
                })
                ->orWhereHas('livro_autors', function ($query) use ($value) {
                    $query->whereHas('autor', function ($query) use ($value) {
                        $query->where('nome', 'LIKE', '%' . $value . '%');
                    });
                });
        }
        return $query;
    }
}
