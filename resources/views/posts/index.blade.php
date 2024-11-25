@extends('layout.layout')

@section('title', 'Inicio - Blog')

@section('content')
    <h1 class="text-center mb-4">Entradas del Blog</h1>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @forelse ($posts as $post)
        <div class="card mb-3">
            <div class="card-body">
                <h3>{{ $post->title }}</h3>
                <p>{{ $post->content }}</p>
                <small class="text-muted">Publicado el {{ $post->created_at->format('d/m/Y') }}</small>
            </div>
        </div>
    @empty
        <p class="text-center">No hay entradas aún. ¡Crea la primera!</p>
    @endforelse
@endsection
