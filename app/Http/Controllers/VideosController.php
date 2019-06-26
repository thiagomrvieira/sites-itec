<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;

class VideosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $videos = Video::all();
        return view ('videos', compact('videos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('videos-novo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $video = new Video();
        $video->titulo = $request->input('titulo');
        $video->link = $request->input('link');
        $video->texto = $request->input('texto');
        $video->status = $request->input('status');
        $path = $request->file('imagem')->store('imgVideo', 'public');
        $video->imagem = $path;
        $video->criado_em = \Carbon\Carbon::now();
        $video->save();
        return redirect('videos');

        
        

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
        $video =  Video::find($id);
        if (isset($video)) {
            return view ('videos-editar', compact('video'));
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
        $video = Video::find($id);
        if (isset($video)) {
            $video->titulo = $request->input('titulo');
            $video->texto = $request->input('texto');
            $video->status = $request->input('status');
            if ($request->hasFile('imagem')) {
                $path = $request->file('imagem')->store('imgVideo', 'public');
                $video->imagem = $path;
            }
            if ($request->input('data')) { 
                $video->criado_em = $request->input('data');
            }
            
            $video->save();
        }
        return redirect('videos');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $video =  Video::find($id);
        if (isset($video)) {
            $video->delete();
        }
        return redirect('videos');

    }
}
