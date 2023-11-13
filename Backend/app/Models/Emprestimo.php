<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emprestimo extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'id',
        'Data_emprestimo',
        'User'
    ];
}
