<x-layout>
    <div class="container" id="main-container">
        <div class="row" id="row-a1">
            <div class="col-12 col-12-a1">
                <div class="card card--welcome">
                    <div class="card-body">
                        <div class="card-header">
                            <h3>
                                @if (isset($post))
                                    Editar
                                @else
                                    Crear
                                @endif publicación
                            </h3>
                        </div>
                        <p class="card-text">
                            @if (isset($post))
                                Desde acá podés editar la publicación.
                            @else
                                Desde acá podés agregar nuevas publicaciones a la portada de la web.
                            @endif
                        </p>
                        <form class="form-crud" method="POST"
                            action=" 
                                @if (isset($post)) {{ route('post.update', ['post' => $post]) }} 
                                @else 
                                {{ route('post.store') }} @endif"
                            enctype="multipart/form-data">

                            <div class="col-12">
                                <label for="title">Título</label>
                                <input type="text" class="form-control form-control__input" name="title"
                                    id="title" placeholder="Título de la publicación"
                                    value="@isset($post) {{ $post->title }} @endisset" required>
                            </div>
                            <div class="col-6">
                                <label for="type">Tipo de post</label>
                                <select class="form-select form-select__type" name="type" id="type"
                                    aria-label="Seleccionar tipo de publicación">
                                    @if (isset($post))
                                        @if ($post->type == '1')
                                            <option value="1" selected>Estándar</option>
                                            <option value="2">Tarjeta</option>
                                        @else
                                            <option value="1">Estándar</option>
                                            <option value="2" selected>Tarjeta</option>
                                        @endif
                                    @else
                                        <option value="1">Estándar</option>
                                        <option value="2">Tarjeta</option>
                                    @endif
                                </select>
                            </div>
                            <div class="col-12">
                                <label for="description">Descripción</label>
                                <textarea class="form-control form-control__textarea" name="description" id="description"
                                    placeholder="Descripción de la publicación" required> @isset($post) {{ $post->description }} @endisset </textarea>
                                <p class="fade-txt">Sólo visible para el equipo.</p>
                            </div>
                            <div class="col-12">
                                <label for="content">Contenido</label>
                                <textarea class="form-control form-control__textarea form-control__textarea--content" name="content" id="content"
                                    placeholder="Contenido de la publicación" required> @isset($post) {{ $post->content }} @endisset </textarea>
                            </div>
                            <div class="col-6 input-group">
                                <label for="photo">Imágen</label>
                                @isset($post) <img src="{{ url("./storage/img/$post->photo") }}" id="form-crud__img--edit" class=""
                                alt="Contactanos para saber más"> @endisset
                                <input type="file" class="form-control form-control__photo" accept="image/*"
                                    name="photo" id="photo">
                                <p class="fade-txt">Recomendable: El ancho de la imagen mayor al alto.</p>
                            </div>
                            <div class="row row--double">
                                <div class="col-5">
                                    <label for="btn">Texto del botón</label>
                                    <input type="text" class="form-control form-control__input" name="btn"
                                        id="btn" value="@isset($post) {{ $post->btn }} @else Ingresar @endisset" required>
                                </div>
                                <div class="col-5">
                                    <label for="post_order">Orden del post</label>
                                    <select class="form-select form-select__order" name="post_order" id="order-select"
                                        aria-label="Seleccionar tipo de publicación" required>
                                        <option value="top" selected>Arriba</option>
                                        <option value="bottom">Abajo</option>
                                    </select>
                                </div>
                            </div>

                            @csrf
                            @method('POST')
                            @if ($errors->any())
                                <ul class="error-box">
                                    @foreach ($errors->all() as $error)
                                        <li class="error-item">{{ $error }}</li>
                                    @endforeach
                                </ul>
                            @endif
                            <input type="hidden" name="id" value="@isset($post) {{$post->id}} @endisset"/>
                            <div class="control-group control-group--btn"><button class="btn-standard">Publicar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
