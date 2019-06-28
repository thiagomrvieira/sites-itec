<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Definicao;

class DefinicoesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $definicoes = Definicao::find(01);
        return view ('definicoes', compact('definicoes'));
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
        //
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
        //
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
        $definicoes = Definicao::find($id);
        if (isset($definicoes)) {
            if ($request->input('nome')) { 
                $definicoes->nome = $request->input('nome');
            }else{
                $definicoes->nome = null;
            }
            if ($request->input('sigla')) { 
                $definicoes->sigla = $request->input('sigla');
            }else{
                $definicoes->sigla = null;
            }
            if ($request->input('telefone')) { 
                $definicoes->telefone = $request->input('telefone');
            }else{
                $definicoes->telefone = null;
            }
            if ($request->input('endereco')) { 
                $definicoes->endereco = $request->input('endereco');
            }else{
                $definicoes->endereco = null;
            }
            if ($request->input('facebook')) { 
                $definicoes->facebook = $request->input('facebook');
            }else{
                $definicoes->facebook = null;
            }
            if ($request->input('youtube')) { 
                $definicoes->youtube = $request->input('youtube');
            }else{
                $definicoes->youtube = null;
            }
            if ($request->input('instagram')) { 
                $definicoes->instagram = $request->input('instagram');
            }else{
                $definicoes->instagram = null;
            }
            if ($request->input('twitter')) { 
                $definicoes->twitter = $request->input('twitter');
            }else{
                $definicoes->twitter = null;
            }
            if ($request->input('outro')) { 
                $definicoes->outra_rede = $request->input('outro');
            }else{
                $definicoes->outra_rede = null;
            }
            $definicoes->save();
        }

        return redirect('/definicoes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
