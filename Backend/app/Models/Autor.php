<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Autor extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'id',
        'Nome'
    ];

    /* protected $hidden = [
        'id'
    ]; */

    public function Livros(): HasMany
    {
        return $this->hasMany(Livro::class);
    }

}
