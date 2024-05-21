<x-layout>
    <div class="container" id="main-container">
        <div class="row ">
            <div class="col-12 col-12__table show-post">
                <a class="link-back" href="{{ url()->previous() }}"><img class="back"
                        src="{{ url('./resources/img/prev-arrow-img.png') }}" alt="Volver"></a>
                <h2 class="col-12__table-title">Vista previa del post</h2>
                @if ($post->type == '1')
                    <div class="row row-a5 type-1-post">
                        <div class="col-12 col-12-a5">
                            <div class="card type-1-post-card">
                                <div class="card-body type-1-post-card-body">
                                    <h5 class="card-title type-1-post-card-title">{{ $post->title }}</h5>
                                    {{-- <img src="{{ url('https://placehold.co/2236x1376') }}" class="card-img-top" alt="Contamos con una gama de especialistas en medicina"> --}}
                                    <img src="{{ url("./storage/img/$post->photo") }}" class="card-img-top"
                                        alt="Contactanos para saber más">
                                    <p class="card-text type-1-post-card-text">{{ $post->content }}</p>
                                    <button href="{{ url('post.show', ['post' => $post]) }}"
                                        class="btn-standard">{{ $post->btn }}</button>
                                </div>
                            </div>
                        </div>
                    </div>
                @elseif ($post->type == '2')
                    <div class="row row-a6 type-2-post">
                        <div class="col-12 col-12-a6">
                            <div class="card type-2-post-card">
                                <div class="card-body type-2-post-card-body">
                                    <h5 class="card-title type-2-post-card-title">{{ $post->title }}</h5>
                                    <img src="{{ url("./storage/img/$post->photo") }}" class="card-img-top"
                                        alt="Contactanos para saber más.">
                                    {{-- <img src="{{ url('./resources/img/doctor-ecografia.jpg') }}" class="card-img-top" alt="Medicina para el corazón y todo el sistema circulatorio."> --}}
                                    <p class="card-text type-2-post-card-text">{{ $post->content }}</p>
                                    <button href="{{ url('post.show', ['post' => $post]) }}"
                                        class="btn-standard">{{ $post->btn }}</button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
                <table class="table-responsive">
                    <thead>
                        <tr>
                            <th colspan="2" scope="col">Información del post<br></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Título</td>
                            <td><span>{{ $post->title }}</span></td>
                        </tr>
                        <tr>
                            <td>Descripción</td>
                            <td><span>{{ $post->description }}</span></td>
                        </tr>
                        <tr>
                            <td>Contenido</td>
                            <td><span>{{ $post->content }}</span></td>
                        </tr>
                        <tr>
                            <td>Texto del botón</td>
                            <td><span>{{ $post->btn }}</span></td>
                        </tr>
                        <tr>
                            <td>Fecha</td>
                            <td><span>{{ $post->created_at }}</span></td>
                        </tr>
                        <tr>
                            <td>Orden de listado</td>
                            <td><span>{{ $post->post_order }}</span></td>
                        </tr>
                        <tr>
                            <td><span>Imagen</span></td>
                            <td><img src="{{ url("./storage/img/$post->photo") }}" class="card-img-top"
                                    alt="Contactanos para saber más"></td>
                        </tr>
                    </tbody>
                </table>
                <div class="actions">
                    <a href="{{ route('post.edit', ['post' => $post]) }}"><button class="btn-standard btn-standard__edit">Editar</button></a>
                    <a href="{{ route('post.destroy', ['post' => $post]) }}"><button class="btn-standard btn-standard__destroy">Eliminar</button></a>
                </div>
            </div>
        </div>
    </div>
</x-layout>
