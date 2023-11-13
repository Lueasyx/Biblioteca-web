<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class EmprestimoLivro extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'emprestimo_id',
        'livro_id',
        'data_previsao_devolucao',
        'devolvido'
    ];
}
