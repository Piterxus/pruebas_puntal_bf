<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Embarcacion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;

class EmbarcacionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Embarcacion::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $embarcacion = new Embarcacion($request->all());
        $embarcacion->save();

        return response()->json($embarcacion, 201);
    }

    /**
     * Display the specified resource.
     */
    // public function show(Embarcacion $embarcacion)
    // {
    //     return $embarcacion;
    // }
    public function show($matricula)
    {
        $embarcacion = Embarcacion::find($matricula);

        if ($embarcacion == null) {
            return response()->json([
                'message' => 'No se encuentra la embarcacion',
                'code' => 404
            ], 404);
        }
        return response()->json([
            'data' => $embarcacion,
            'code' => 200
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Embarcacion $embarcacion)
    {
        DB::enableQueryLog();

        try {
            // Verifica si la embarcación existe
            if (!$embarcacion) {
                return response()->json(['error' => 'Embarcación no encontrada'], 404);
            }

            Log::info('URL de la solicitud:', ['URL' => $request->url()]);
            Log::info('Embarcación recibida:', ['Embarcación Request' => $request->Matricula]);
            Log::info('Embarcación recibida:', ['Embarcación' => $embarcacion]);
            Log::info('Matrícula recibida:', ['Matricula' => $embarcacion->Matricula]);
            Log::info('Datos de la solicitud en el controlador:', $request->all());

            // Obtiene los datos actuales antes de la actualización
            $oldData = $embarcacion->toArray();
            Log::info('Datos antes de la actualización:', $oldData);

            // Actualiza la embarcación con los datos de la solicitud
            Log::info('Datos de la solicitud Antes:', $request->all());

            // Usa el método update de Eloquent para la actualización
            $updateResult = Embarcacion::where('Matricula', $request->Matricula)->update($request->except(['Matricula', 'created_at', 'updated_at']));

            Log::info('Datos de la solicitud:', $request->all());

            // Verifica si la actualización fue exitosa
            if ($updateResult) {
                // Obtiene los datos después de la actualización
                $embarcacion = Embarcacion::find($request->Matricula);
                $newData = $embarcacion->toArray();
                Log::info('Datos después de la actualización:', $newData);

                // Loguea la información antes y después de la actualización
                Log::info('Embarcación actualizada', [
                    'antes' => $oldData,
                    'después' => $newData,
                ]);

                return response()->json($embarcacion, 200);
            } else {
                return response()->json(['error' => 'Error al actualizar la embarcación'], 500);
            }
        } catch (QueryException $e) {
            // Manejo de errores específicos de consulta SQL
            Log::error('Error durante la actualización de la embarcación: ' . $e->getMessage());
            return response()->json(['error' => 'Error interno del servidor'], 500);
        } catch (\Exception $e) {
            // Manejo de otros errores
            Log::error('Error durante la actualización de la embarcación: ' . $e->getMessage());
            return response()->json(['error' => 'Error interno del servidor'], 500);
        }
    }


    // public function update(Request $request, Embarcacion $embarcacion)
    // {
    //     DB::enableQueryLog();
    //     try {
    //         // Verifica si la embarcación existe
    //         if (!$embarcacion) {
    //             return response()->json(['error' => 'Embarcación no encontrada'], 404);
    //         }
    //         Log::info('URL de la solicitud:', ['URL' => $request->url()]);
    //         Log::info('Embarcación recibida:', ['Embarcación Request' => $request->Matricula]);
    //         Log::info('Embarcación recibida:', ['Embarcación' => $embarcacion]);
    //         Log::info('Matrícula recibida:', ['Matricula' => $embarcacion->Matricula]);
    //         Log::info('Datos de la solicitud en el controlador:', $request->all());

    //         // Obtiene los datos actuales antes de la actualización
    //         $oldData = $embarcacion->toArray();
    //         Log::info('Datos antes de la actualización:', $oldData);

    //         // Actualiza la embarcación con los datos de la solicitud
    //         // Log::info('Query Log:', \DB::getQueryLog());

    //         Log::info('Datos de la solicitud Antes:', $request->all());

    //         // $updateResult = $embarcacion->update($request->all());
    //         $embarcacion->fill($request->all());
    //         $updateResult = $embarcacion->save();

    //         Log::info('Datos de la solicitud:', $request->all());

    //         // Verifica si la actualización fue exitosa
    //         if ($updateResult) {
    //             // Obtiene los datos después de la actualización
    //             $embarcacion = Embarcacion::find($request->Matricula);
    //             $newData = $embarcacion->toArray();
    //             Log::info('Datos después de la actualización:', $newData);

    //             // Loguea la información antes y después de la actualización
    //             Log::info('Embarcación actualizada', [
    //                 'antes' => $oldData,
    //                 'después' => $newData,
    //             ]);

    //             return response()->json($embarcacion, 200);
    //         } else {
    //             return response()->json(['error' => 'Error al actualizar la embarcación'], 500);
    //         }
    //     } catch (\Exception $e) {
    //         // Manejo de errores
    //         Log::error('Error durante la actualización de la embarcación: ' . $e->getMessage());
    //         return response()->json(['error' => 'Error interno del servidor'], 500);
    //     }
    // }


    public function destroy(Embarcacion $embarcacion)
    {
        $embarcacion->delete();
        return response()->json(null, 204);
    }
}
