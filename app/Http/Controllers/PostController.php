<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Carbon\Carbon;
use Doctrine\DBAL\Logging\Middleware;
use Illuminate\Http\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rules\File as RulesFile;
use Spatie\LaravelIgnition\Recorders\DumpRecorder\Dump;
use League\Flysystem\Visibility;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Mostrar publicaciones al visitante
        $posts = Post::orderByDesc('post_order')->get();
        return view('post.index', ['posts' => $posts]);
    }

    public function indexTeam()
    {
        // Mostrar tabla con publicaciones
        $posts = Post::orderByDesc('post_order')->get();
        $creation_dates = [];
        foreach ($posts as $position => $post) {
            $creation_date = Carbon::createFromFormat('Y-m-d H:i:s', $post->created_at)->format('d/m/Y');
            $creation_dates[$position] = $creation_date;
        }
        return view('post.indexTeam', ['posts' => $posts, 'creation_dates' => $creation_dates]);
    }

    public function create()
    {
        session_start();
        // Crear post
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        session_start();
        $request->validate([
            'title' => 'required|string|max:40',
            'description' => 'string',
            'content' => 'required|string|min:4',
            'post_order' => 'required',
            'btn' => 'string',
            'photo' => ['required', RulesFile::image()->min('10kb')->max('8mb')],
        ]);

        // Guardo la imagen
        $imagePath = Storage::disk('img')->put('/', $request->photo);
        // Obtengo el último número de orden en la lista de posts
        $new_post_order = $request->post_order;
        if ($request->post_order == 'top') {
            $max_post_order = Post::max('post_order');
            $new_post_order = $max_post_order + 1;
        } else {
            $min_post_order = Post::min('post_order');
            $new_post_order = $min_post_order - 1;
        }

        // Guardar publicación
        $post = new Post;
        $post->type = $request->type;
        $post->title = $request->title;
        $post->description = $request->description;
        $post->content = $request->content;
        $post->photo = $imagePath;
        $post->btn = $request->btn;
        $post->post_order = $new_post_order;
        $post->created_at = Carbon::now()->timestamp;
        $post->updated_at = null;
        $post->save();
        return to_route('team');
    }


    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        // Crear el modelo de render_order
        return view('post.show', ['post' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('post.create', ['post' => $post]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        // Actualizar publicación
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        // Eliminar un registro

    }

    
}
