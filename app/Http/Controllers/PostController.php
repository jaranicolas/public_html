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
        return view('post.indexTeam', ['posts' => $posts]);
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
            'title' => 'required|string|required|max:40',
            'description' => 'string',
            'content' => 'required|string|min:4',
            'post_order' => 'required',
            'btn' => 'string',
            'photo' => ['required', RulesFile::image()->min('10kb')->max('8mb')],
        ]);

        $resultado = Storage::disk('img')->put('/', $request->photo);
        // dump($resultado);
        // dump($request);
        $new_post_order = $request->post_order;
        // Obtengo el último número de orden en la lista de posts
        if ($request->post_order == 'top') {
            // dump('Lo publica arriba, número mayor');
            $max_post_order = Post::max('post_order');
            // dump($max_post_order);
            $new_post_order = $max_post_order + 1;
            // dump($new_post_order);
        } else {
            // dump('Lo publica abajo, número menor');
            $min_post_order = Post::min('post_order');
            // dump($min_post_order);
            $new_post_order = $min_post_order - 1;
            // dump($new_post_order);
        }

        // Guardar publicación
        $post = new Post;
        $post->type = $request->type;
        $post->title = $request->title;
        $post->description = $request->description;
        $post->content = $request->content;
        $post->photo = $resultado;
        $post->btn = $request->btn;
        $post->post_order = $new_post_order;
        $post->created_at = Carbon::now()->timestamp;
        $post->updated_at = null;
        $post->save();
        // dump($post);
        return to_route('team', ['posts' => Post::all()]);
        // dd(Post::create(['id' => false, 'type' => 12, 'title' => 'Odontología', 'description' => 'Cuidamos tu sonrisa', 'content' => 'Contamos con el mejor equipo y profesionales del cuidado bucal.', 'photo' => 'dentista.png', 'btn' => 'Agendar revisión', 'post_order' => $new_post_order, 'created_at' => Carbon::now()->timestamp, 'updated_at' => Carbon::now()->timestamp])->attributesToArray());
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        // Actualizar publicación
        dump(Post::where('description', '=', null)->update(['description' => 'Más prestaciones']));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        // Eliminar un registro

        dd($post->destroy(3, 4, 5, 15, 16));
    }
}
