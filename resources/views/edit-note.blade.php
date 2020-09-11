@extends('layout')

@section('title', 'Editar una nota')

@section('content')
    <h1>Editar una nota</h1>

    <div class="container">
    <form method="POST" action="{{ route('notas.update', ['nota' => $nota]) }}">
        @csrf
        @method('PUT')
        @if($errors->any())
            <p>Por favor corrige los siguientes errores: </p>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
            <div class="form-group">
              <label for="title">Título</label>
            <input type="text" name="title" class="form-control" id="title" value="{{ old('title', $nota->title) }}">
              @error('title')
                <p>{{ $message }}</p>
              @enderror
            </div>
            <div class="form-group">
                <label for="content">Contenido</label>
            <textarea name="content" class="form-control" id="content" rows="3">{{ old('content', $nota->content) }}</textarea>
                @error('content')
                    <p>{{ $message }}</p>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
@endsection