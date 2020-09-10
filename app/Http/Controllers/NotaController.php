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

    public function view($id) {
        return 'Detalle de la nota: ' . $id;
    }
}
