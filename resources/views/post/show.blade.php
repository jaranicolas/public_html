<x-layout>
    <div class="container" id="main-container">
        <div class="row ">
            <div class="col-12 col-12__table">
                <svg class="back" src="./resources/img/prev-arrow-img.png"></svg>
                <div>
                    <h2>{{ $post->title }}</h2>
                </div>
                <p>{{ $post->description }}</p>
                <img src="{{ url("./storage/img/$post->photo") }}" class="post-img" alt="Imágen del post - Medicina de alto valor">
                <p>{{ $post->content }}</p>
                <span>Botón: </span><span>{{ $post->btn }}</span>
                <span>Posición en la lista: </span><span>{{ $post->btn }}</span>
            </div>
        </div>
    </div>
</x-layout>
