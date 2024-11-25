@extends('layout.layout')

@section('title', 'Nueva Entrada')

@section('content')
    <h1 class="text-center mb-4">Nueva Entrada</h1>

    <form action="{{ route('posts.store') }}" method="POST" class="border p-4 rounded">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Título</label>
            <input type="text" name="title" id="title" class="form-control" placeholder="Escribe el título" required>
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Contenido</label>
            <textarea name="content" id="content" class="form-control" rows="5" placeholder="Escribe el contenido" required></textarea>
        </div>
        <button type="submit" class="btn btn-success">Guardar</button>
        <a href="{{ route('posts.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection
