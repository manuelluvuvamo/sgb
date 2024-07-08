<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Editora extends Model
{
    use HasFactory;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'nome',
        'pais',
       /*  'codigo' */
    ];
    protected $dates = ['deleted_at'];

    public function livro() {
        return $this->hasMany(Livro::class, 'id_editora', 'id');
    }
}
