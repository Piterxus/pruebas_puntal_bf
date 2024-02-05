<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\LoginController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
// Route::middleware('auth:sanctum')->group(function () {
//     Route::apiResource('api/instalaciones', App\Http\Controllers\API\InstalacionController::class);
// });
// Route::post('/login', [LoginController::class, 'store']);
Route::apiResource("administrativos", "App\Http\Controllers\API\AdministrativoController");
// Route::apiResource("alquileres", "App\Http\Controllers\API\AlquilerController");
Route::get('alquileres/{plazaBaseID}/{embarcacionID}', 'App\Http\Controllers\API\AlquilerController@show');
Route::apiResource("alquileres", "App\Http\Controllers\API\AlquilerController")->except('show');
Route::apiResource("concesionarios", "App\Http\Controllers\API\ConcesionarioController");
Route::apiResource("embarcaciones", "App\Http\Controllers\API\EmbarcacionController");
Route::apiResource("guardamuelles", "App\Http\Controllers\API\GuardamuelleController");
Route::apiResource("guardiaciviles", "App\Http\Controllers\API\GuardiacivilController");
Route::apiResource("incidencias", "App\Http\Controllers\API\IncidenciaController");
Route::apiResource("instalaciones", "App\Http\Controllers\API\InstalacionController");
Route::apiResource("pantalanes", "App\Http\Controllers\API\PantalanController");
Route::apiResource("plazasbases", "App\Http\Controllers\API\PlazabaseController");
Route::apiResource("plazas", "App\Http\Controllers\API\PlazaController");
Route::apiResource("roles", "App\Http\Controllers\API\RolController");
Route::apiResource("transitos", "App\Http\Controllers\API\TransitoController");
Route::apiResource("tripulantes", "App\Http\Controllers\API\TripulanteController");
Route::apiResource("usuarios", "App\Http\Controllers\API\UsuarioController");








