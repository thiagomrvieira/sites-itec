<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Programa;

class ProgramasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $programas = Programa::all();
        return view('programas', compact('programas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $programa = new Programa();
        $path = $request->file('imagem')->store('imgProgramas', 'public');
        $programa->imagem = $path;
        $programa->titulo = $request->input('titulo');
        $programa->slug = str_replace(' ', '-', strtolower($request->input('titulo')));
        $programa->texto = $request->input('texto');
        $programa->status = $request->input('status');
        $programa->save();

        return redirect('/programas');
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
        $programa =  Programa::find($id);
        if (isset($programa)) {
            return view ('programas-editar', compact('programa'));
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
        $programa = Programa::find($id);
        if (isset($programa)) {
            if($request->hasFile('imagem')) {
                $path = $request->file('imagem')->store('imgProgramas', 'public');
                $programa->imagem = $path;
            }
            $programa->titulo = $request->input('titulo');
            $programa->slug = str_replace(' ', '-', strtolower($request->input('titulo')));
            $programa->texto = $request->input('texto');
            $programa->status = $request->input('status');
            $programa->user_id = auth()->user()->id;
            $programa->status = $request->input('status');
            $programa->save();
        }
        

        return redirect('/programas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $programa = Programa::find($id);
        if (isset($programa)) {
            $programa->delete();
        }
        

        return redirect('/programas');
    }

     // API - - - - - - - - - - - - - - - - 
     public function programas()
     {
         $programas = Programa::all();
         return response()->json($programas);
     }
 
 
     public function programa(Programa $slug)
     {
         //$noticia = Noticia::find($slug);
         //if (isset($noticia)){
             return response()->json($slug);
         //}
     }
 
}
