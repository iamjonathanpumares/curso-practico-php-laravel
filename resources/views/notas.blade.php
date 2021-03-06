@extends('layout')

@section('title', 'Listado de notas')

@section('content') 
    <h1>Listado de notas</h1>

    <div class="container">
        <div class="row">
            @forelse ($notas as $nota)
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                    <h5 class="card-title">{{ $nota->title }}</h5>
                    <p class="card-text">{{ $nota->content }}</p>
                    <a href="{{ route('notas.edit', ['nota' => $nota]) }}" class="btn btn-primary">Editar</a>
                    <form method="POST" action="{{ route('notas.destroy', $nota) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                    </div>
                </div>
            </div>
            @empty
                <h2>No hay elementos para mostrar</h2>
            @endforelse
        </div>
    </div>
@endsection