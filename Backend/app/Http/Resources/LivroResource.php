<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class LivroResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'isbn' => $this->isbn,
            'Titulo' => $this->Titulo,
            'Edicao' => $this->Edicao,
            'Estoque' => $this->Estoque,
            'Autor' => $this->Autor
        ];
    }
}
