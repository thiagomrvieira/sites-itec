<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Noticia;

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
        return view ('noticias', compact('noticias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('noticias-novo');
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
        $noticia->titulo = $request->input('titulo');
        $noticia->chapeu = $request->input('chapeu');
        $noticia->intro = $request->input('intro');
        $noticia->reporter = $request->input('reporter');
        $noticia->texto = $request->input('texto');
        $noticia->slug = str_replace(' ', '-', strtolower($request->input('titulo')));
        $noticia->autor_imagem = $request->input('autoria');
        $noticia->categoria_id = 3;
        $noticia->user_id = 1;
        $noticia->status = $request->input('status');
        $noticia->destaque = $request->input('destaque');

 


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
        if (isset($noticia)) {
            return view('noticias-editar', compact('noticia'));
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
            $noticia->titulo = $request->input('titulo');
            $noticia->chapeu = $request->input('chapeu');
            $noticia->intro = $request->input('intro');
            $noticia->reporter = $request->input('reporter');
            $noticia->texto = $request->input('texto');
            $noticia->slug = str_replace(' ', '-', strtolower($request->input('titulo')));
            $noticia->autor_imagem = $request->input('autoria');
            $noticia->categoria_id = 3;
            $noticia->user_id = 1;
            $noticia->status = $request->input('status');
            $noticia->destaque = false;
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
}
