<x-layout>
    <div class="container" id="main-container">
        <div class="row ">
            <div class="col-12 col-12__table">
                <h2>Lista de publicaciones</h2>
                <p>Acá podés ver las publicaciones de tu web, editarlas o borrarlas.<br>Cliqueá un post para ver más
                    detalles.</p>
                <table class="table-responsive">
                    <thead>
                        <tr>
                            <th scope="col">Título - Descripción<br></th>
                            <th scope="col">Foto</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $position => $post)
                            <tr>
                                <td><a href="{{ route('post.show', ['post' => $post->id]) }}"><span
                                            class="row-table-header">{{ $post->title }}</span><br>({{ $creation_dates[$position] }})<br>{{ $post->description }}</a>
                                </td>
                                <td><a href="{{ route('post.show', ['post' => $post->id]) }}"><img
                                            src="{{ url("public/storage/img/$post->photo") }}" class="card-img-top"
                                            alt="Contactanos para saber más"></a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-layout>
