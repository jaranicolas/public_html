@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <a href="/blog" class="btn btn-outline-primary btn-sm">Volver</a>
                <div class="border rounded mt-5 pl-4 pt-4 pr-4 pb-4">
                    <h1 class="display-4">Crear nueva publicación</h1>
                    <p>Completa este formulario para subir una publicación a la página</p>
                    <hr>
                    <form action="" method="POST">
                        @csrf
                        <div class="row">
                            <div class="control-group col-12 mt-2">
                                <label for="title">Título de la publicación</label>
                                <input type="text" name="title" id="title" class="form-control"
                                    placeholder="Ingresa el título de la publicación" required />
                            </div>

                            <div class="control-group col-12 mt-2">
                                <label for="body">Cuerpo de la publicación</label>
                                <textarea name="body" id="body" class="form-control" cols="30" rows="10"
                                    placeholder="Ingresa el contenido principal de la publicación" required></textarea>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="control-group col-12 text-center">
                                <button class="btn btn-primary" id="btn-submit">Crear publicación</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
