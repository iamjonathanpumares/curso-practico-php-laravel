<?php

use Illuminate\Support\Facades\Route;
use App\Models\Nota;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// CRUD
// C: Create (Crear un registro)
// R: Read (Leer uno o más registros)
// U: Update (Actualizar un registro)
// D: Delete (Eliminar un registro)

Route::get('notas/index', function () {
    $notas = Nota::all();
    return view('notas', ['notas' => $notas]);
})->name('notas.index');

// Rutas con parámetros
Route::get('notas/{id}', function ($id) {
    return 'Detalle de la nota: ' . $id;
})->where('id', '[0-9]+');

Route::get('notas/crear', function () {
    return view('add-note');
})->name('notas.crear');

Route::get('notas/{id}/editar', function () {
    return 'Formulario para editar notas';
});

Route::get('hola', function () {
    return 'Hola culebrita'; // Retorna una cadena
});

Route::get('cursos', function () {
    return [ // Retorna un arreglo convierte en JSON de manera automatica
        'cursos' => [
            'Curso 1',
            'Curso 2',
            'Curso 3',
        ]
    ];
});
