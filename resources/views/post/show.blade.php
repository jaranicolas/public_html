<x-layout>
    <div class="container" id="main-container">
        <div class="row ">
            <div class="col-12 col-12__table">
                <a href="{{ url()->previous() }}"><img class="back" src="{{ url('./resources/img/prev-arrow-img.png') }}"
                        alt="Volver"></a>
                <div>
                    <a href="{{ url()->previous() }}"><h2 class="col-12__table-title">Vista previa del post</h2></a>
                </div>
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
                                    {{-- <img src="{{ url('public/resources/img/doctor-ecografia.jpg') }}" class="card-img-top" alt="Medicina para el corazón y todo el sistema circulatorio."> --}}
                                    <p class="card-text type-2-post-card-text">{{ $post->content }}</p>
                                    <button href="{{ url('post.show', ['post' => $post]) }}"
                                        class="btn-standard">{{ $post->btn }}</button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
                <div>
                    <h2>{{ $post->title }}</h2>
                </div>
                <p>{{ $post->description }}</p>
                <img src="{{ url("./storage/img/$post->photo") }}" class="post-img"
                    alt="Imágen del post - Medicina de alto valor">
                <p>{{ $post->content }}</p>
                <span>Botón: </span><span>{{ $post->btn }}</span><br>
                <span>Posición en la lista: </span><span>{{ $post->btn }}</span>
            </div>
        </div>
    </div>
</x-layout>
