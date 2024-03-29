<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Noticia;
use App\CategoriaNoticia;
use Carbon\Carbon;

class NoticiasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $noticias = Noticia::all();
        $categorias = CategoriaNoticia::all();
        
        return view ('noticias', compact('noticias', 'categorias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = CategoriaNoticia::all();
        $count = CategoriaNoticia::all()->count();
        if ($count > 0) {
            return view ('noticias-novo', compact('categorias'));
        } else {
            return redirect ('noticias/categorias');
        }
        
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $noticia = new noticia();
        $noticia->categoria_id = $request->input('categoria');
        $noticia->titulo = $request->input('titulo');
        $noticia->chapeu = $request->input('chapeu');
        $noticia->intro = $request->input('intro');
        $noticia->reporter = $request->input('reporter');
        $noticia->texto = $request->input('texto');
        $noticia->slug = str_replace(' ', '-', strtolower($request->input('titulo')));
        $noticia->status = $request->input('status');
        $noticia->destaque = $request->input('destaque');
        $noticia->criado_em = \Carbon\Carbon::now();

        if ($request->hasFile('imagem')) {
            $path = $request->file('imagem')->store('imgNoticias', 'public');
            $noticia->imagem = $path;
            $noticia->autor_imagem = $request->input('autoria');
        }else{
            $noticia->imagem = null;
            $noticia->autor_imagem = null;
        }
        $noticia->save();

        return redirect('/noticias');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $noticia = Noticia::find($id);
        $categorias = CategoriaNoticia::all();
        if (isset($noticia)) {
            return view('noticias-editar', compact('noticia', 'categorias'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $noticia = Noticia::find($id);
        if (isset($noticia)) {
            $noticia->categoria_id = $request->input('categoria');
            $noticia->titulo = $request->input('titulo');
            $noticia->chapeu = $request->input('chapeu');
            $noticia->intro = $request->input('intro');
            $noticia->reporter = $request->input('reporter');
            $noticia->texto = $request->input('texto');
            $noticia->slug = str_replace(' ', '-', strtolower($request->input('titulo')));
            $noticia->autor_imagem = $request->input('autoria');
            $noticia->status = $request->input('status');
            $noticia->destaque = $request->input('destaque');
            if ($request->hasFile('imagem')) {
                $path = $request->file('imagem')->store('imgNoticias', 'public');
                $noticia->imagem = $path;
            }
            if ($request->input('data')) { 
                $noticia->criado_em = $request->input('data');
            }
            $noticia->save();
        }

        return redirect('/noticias');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $noticia = Noticia::find($id);
        if(isset($noticia)){
            $noticia->delete();
        }
        return redirect('/noticias');
    }



    // API - - - - - - - - - - - - - - - - 
    public function noticias()
    {
        $noticias = Noticia::all();
        return response()->json($noticias);
    }


    public function noticia(Noticia $slug)
    {
        //$noticia = Noticia::find($slug);
        //if (isset($noticia)){
            return response()->json($slug);
        //}
    }



}
