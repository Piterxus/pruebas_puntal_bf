<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usuarios = Usuario::all();

        return view('usuarios.index', compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $usuario = new Usuario();

        return view('usuarios.create', compact('usuario'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'username' => 'required',
            'email' => 'required',
            'telefono' => 'required',
            'rol' => 'required',
            'estado' => 'required',
            'direccion' => 'required',
            'imagen' => 'nullable|image',
            'descripcion' => 'required',
            'dni' => 'required'
            
        ]);

        $usuario = new Usuario();

        $usuario->NombreCompleto = $request->nombre;
        $usuario->NombreUsuario = $request->username;
        $usuario->Email = $request->email;
        $usuario->Telefono = $request->telefono;
        $usuario->RolID = $request->rol;
        $usuario->Habilitado = $request->estado;
        $usuario->Direccion = $request->direccion;
        $usuario->Imagen = $request->imagen;
        $usuario->Descripcion = $request->descripcion;
        $usuario->DNI = $request->dni;
        $usuario->Contraseña = $request->password;

        $usuario->save();

        return redirect()->route('usuarios.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $usuario = Usuario::find($id);

        return view('usuarios.show', compact('usuario'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $usuario = Usuario::find($id);

        return view('usuarios.edit', compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nombre' => 'required',
            'username' => 'required',
            'email' => 'required',
            'telefono' => 'required',
            'rol' => 'required',
            'estado' => 'required',
            'direccion' => 'required',
            'imagen' => 'nullable|image',
            'descripcion' => 'required',
            'dni' => 'required',
            'password' => 'required'


        ]);

        $usuario = Usuario::find($id);

        $usuario->NombreCompleto = $request->nombre;
        $usuario->NombreUsuario = $request->username;
        $usuario->Email = $request->email;
        $usuario->Telefono = $request->telefono;
        $usuario->RolID = $request->rol;
        $usuario->Habilitado = $request->estado;
        $usuario->Direccion = $request->direccion;
        $usuario->Imagen = $request->imagen;
        $usuario->Descripcion = $request->descripcion;
        $usuario->DNI = $request->dni;
        $usuario->Contraseña = $request->password;

        $usuario->save();

        return redirect()->route('usuarios.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $usuario = Usuario::find($id);

        $usuario->delete();

        // if ($usuario->Imagen) {
        //     unlink(public_path('images/' . $usuario->Imagen));
        // }

        return redirect()->route('usuarios.index');
    }
}
