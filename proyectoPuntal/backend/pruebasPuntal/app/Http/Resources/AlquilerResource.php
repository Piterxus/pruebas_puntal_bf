<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class AlquilerResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'PlazaBaseID' => $this->PlazaBaseID,
            'EmbarcacionID' => $this->EmbarcacionID,
            'FechaInicio' => $this->FechaInicio,
            'FechaFinalizacion' => $this->FechaFinalizacion,
            // Otros campos que desees incluir
        ];
    }
}

class AlquilerCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'data' => $this->collection
        ];
    }
}
