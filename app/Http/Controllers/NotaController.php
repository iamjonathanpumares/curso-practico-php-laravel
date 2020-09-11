<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nota;

class NotaController extends Controller
{
    public function index() {
        $notas = Nota::all();
        return view('notas', ['notas' => $notas]);
    }

    public function create() {
        return view('add-note');
    }

    public function store(Request $request) {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);
        $data = $request->all();
        Nota::create($data);
        return redirect()->route('notas.index');
    }

    public function edit(Nota $nota) {
        return view('edit-note', ['nota' => $nota]);
    }

    public function update(Nota $nota, Request $request) {
        // Validar los datos
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        // Actualizar los datos
        $data = $request->all();
        $nota->update($data);
        return redirect()->route('notas.index');
    }

    public function view(Nota $nota) {
        return view('view-note', ['nota' => $nota]);
    }

    public function destroy(Nota $nota) {
        $nota->delete();
        return redirect()->route('notas.index');
    }
}
