<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Foto;

class FotosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fotos = Foto::all();
        return view ('fotos', compact('fotos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fotos-novo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $foto = new Foto();
        $foto->titulo = $request->input('titulo');
        $foto->texto = $request->input('texto');
        $foto->status = $request->input('status');
        $path = $request->file('imagem')->store('imgFotos', 'public');
        $foto->imagem = $path;
        $foto->save();
        return redirect('fotos');
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
        $foto = Foto::find($id);
        if (isset($foto)) {
            return view('fotos-editar', compact('foto'));
        }
        return redirect('fotos');
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
        $foto = Foto::find($id);
        if (isset($foto)) {
            $foto->titulo = $request->input('titulo');
            $foto->texto = $request->input('texto');
            $foto->status = $request->input('status');
            if ($request->hasFile('imagem')) {
                $path = $request->file('imagem')->store('imgFotos', 'public');
                $foto->imagem = $path;
            }
            $foto->save();
        }
        return redirect('fotos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $foto = Foto::find($id);
        if (isset($foto)) {
            $foto->delete();
        }
        return redirect('fotos');
    }
}
