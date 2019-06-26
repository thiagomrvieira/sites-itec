<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sic;
class SicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $servicos = Sic::all();
        return view('sic', compact('servicos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('sic-novo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sic = new Sic();
        $sic->titulo = $request->input('titulo');
        $sic->texto = $request->input('texto');
        $sic->slug = str_replace(' ', '-', strtolower($request->input('titulo')));

        if ($request->hasFile('imagem')) {
            $path = $request->file('imagem')->store('imgSic', 'public');
            $sic->imagem = $path;
        }else{
            $sic->imagem = null;
            $sic->autor_imagem = null;
        }
        $sic->save();

        return redirect('/sic');
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
        $sic =  Sic::find($id);
        if (isset($sic)) {
            return view ('sic-editar', compact('sic'));
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
        $sic = Sic::find($id);
        if (isset($sic)) {
            $sic->titulo = $request->input('titulo');
            $sic->texto = $request->input('texto');
            if ($request->hasFile('imagem')) {
                $path = $request->file('imagem')->store('imgSic', 'public');
                $sic->imagem = $path;
            }
            
            $sic->save();
        }
        return redirect('sic');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sic = Sic::find($id);
        if (isset($sic)) {
            $sic->delete();
        }
        return redirect('sic');
    }
}
