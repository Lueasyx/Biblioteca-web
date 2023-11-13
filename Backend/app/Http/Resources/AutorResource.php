<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use App\Models\Autor;
use Illuminate\Http\Resources\Json\JsonResource;

class AutorResource extends JsonResource
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
            'Nome' => $this->Nome
        ];
    }
}
