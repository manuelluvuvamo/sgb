<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class LivroAutor extends Model
{
    use HasFactory;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        
        'id_livro',
        'id_autor',
     

    ];
    protected $dates = ['deleted_at'];

    public function autor() {
        return $this->belongsTo(Autor::class, 'id_autor', 'id');
    }
}
