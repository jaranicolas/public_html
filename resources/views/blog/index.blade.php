@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <div class="row">
                    <div class="col-8">
                        <h1 class="display-2">Noticias del sitio web</h1>
                        <p>Aquí puedes ver las publicaciones de la página principal</p>
                    </div>
                    <div class="col-4">
                        <p>Cargar nueva noticia</p>
                        <a href="/blog/create/post" class="btn btn-primary btn-sm">Add Post</a>
                    </div>
                </div>
                @forelse($posts as $post)
                    <ul>
                        <li><a href="/blog/{{ $post->id }}">{{ Str::ucfirst($post->title) }}<a></li>
                    </ul>
                @empty
                    <p class="text-warning">No hay publicación para mostrar</p>
                @endforelse
            </div>
        </div>
    </div>
@endsection
