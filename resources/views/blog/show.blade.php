@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <a href="/blog" class="btn btn-outline-primary btn-sm">Volver</a>
                <h1 class="display-1">{{ Str::ucfirst($post->title) }}</h1>
                <p>{!! $post->body !!}</p>
                <hr>
                <a href="/blog/{{ $post->id }}/edit" class="btn btn-outline-primary">Editar noticia</a>
                <br><br>
                <form id="delete-frm" class="" action="" method="POST">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger">Eliminar publicación</button>
                </form>
            </div>
        </div>
    </div>
@endsection
