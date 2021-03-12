<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post = Post::all(); 
        //dd($post);
        return response()->json(['posts' => $post]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
         //mostrar post individual detalle post
    public function individual($id){
    
    $post = Post::findOrfail($id);
    //dd($post);
    return response()->json(['post' => $post]);
}
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function categoryPost($id){
        //
        //llamamos a la categoria segun el id que mandemos en el request 
        $category = 'Categoria'::findOrFail($id);
        // declaramos $ post para acceder a los post de la categoria con el id enviado por el request
        $posts = Post::where('category_id', $category->id)
            ->latest('id')
            ->get();
        return response()->json(
            [
                'category' => $category,
                'posts' => $posts
            ]
        );
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //llamamos a las categorias
        $categories = 'Categoria'::all()->take(3);
        // return ($categories.'entra a categorias');
        $array = array();
        foreach ($categories as $category) {
            $posts = Post::where('category_id', $category->id)
                ->limit(3)
                ->get();
            $array[] = $posts;
        }
        //return $array;
    
    return response()->json(
        [
            'categoria' => $categories,
            'posts' => $array
        ]
    );

    }
}
