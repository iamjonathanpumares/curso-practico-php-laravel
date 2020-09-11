@extends('layout')

@section('title', 'Detalle una nota')

@section('content')
    <h1>Detalle una nota</h1>

    <div class="container">
    <form>
            <div class="form-group">
              <label for="title">Título</label>
            <input type="text" name="title" class="form-control" id="title" value="{{ $nota->title }}" disabled>
            </div>
            <div class="form-group">
                <label for="content">Contenido</label>
            <textarea name="content" class="form-control" id="content" rows="3" disabled>{{ $nota->content }}</textarea>
            </div>
          </form>
    </div>
@endsection