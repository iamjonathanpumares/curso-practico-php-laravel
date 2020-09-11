<?php

use Illuminate\Support\Facades\Route;
use App\Models\Nota;
use Illuminate\Http\Request;

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

Route::get('notas/index', 'NotaController@index')->name('notas.index');

Route::get('notas/crear', 'NotaController@create')->name('notas.crear');

// Rutas con parámetros
Route::get('notas/{nota}', 'NotaController@view');

Route::post('notas', 'NotaController@store')->name('notas.store');

Route::get('notas/{nota}/editar', 'NotaController@edit')->name('notas.edit');

Route::put('notas/{nota}', 'NotaController@update')->name('notas.update');

Route::delete('notas/{nota}', 'NotaController@destroy')->name('notas.destroy');

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
