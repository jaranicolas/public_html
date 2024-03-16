<x-layout>
    <div class="container" id="main-container">
        <div class="row ">s
            <div class="col-12 col-12__table">
                <h2>Lista de publicaciones</h2>
                <p>Aquí puedes ver las publicaciones de tu web, editarlas o borrarlas.</p>
                <table class="table table-dark table-stripped-columns table-hover caption-top table-responsive">
                    <thead>
                        <tr>
                            <th scope="col">Título</th>
                            <th scope="col">Descripción</th>
                            <th scope="col">Foto</th>
                            <th scope="col">Creado</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                            <tr>
                                <th>{{ $post->title }}</th>
                                <td>{{ $post->description }}</td>
                                <td>{{ $post->photo }}</td>
                                <td>{{ $post->created_at }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-layout>
