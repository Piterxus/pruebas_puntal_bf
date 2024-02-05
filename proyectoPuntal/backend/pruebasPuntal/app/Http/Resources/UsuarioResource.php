<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Resources\Json\ResourceCollection;
use App\Models\Usuario;

class UsuarioResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */

    public function toArray(Request $request): array
    {
        $usuario = Usuario::find($this->UsuarioID);
        return [
            'UsuarioID' => $this->UsuarioID,
            'Nombre' => $this->NombreCompleto,
            'usuario' => $this->NombreUsuario,
            'Email' => $this->Email,
            'Telefono' => $this->Telefono,
            'Rol' => $usuario->rol->NombreRol,

        ];
        // return parent::toArray($request);
    }
}

class UsuarioCollection extends ResourceCollection
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
        // return parent::toArray($request);
    }
}