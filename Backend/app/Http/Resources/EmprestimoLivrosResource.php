<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EmprestimoLivrosResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'emprestimo_id' => $this->emprestimo_id,
            'livro_id' => $this->livro_id,
            'data_previsao_devolucao' => $this->data_previsao_devolucao,
            'devolvido' => $this->devolvido,
        ];
    }
}
