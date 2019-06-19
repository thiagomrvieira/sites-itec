<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Banner;
class BannersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banners = Banner::all();
        return view('banners', compact('banners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $banners = Banner::all();
        return view ('banners-novo', compact('banners'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $banner = new Banner();
        $banner->titulo = $request->input('titulo');
        $banner->texto = $request->input('texto');
        $banner->user_id = 1;
        $banner->status = $request->input('status');
        $path = $request->file('imagem')->store('imgBanners', 'public');
        $banner->imagem = $path;
        $banner->save();

        return redirect('/banners');
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
        $banner = Banner::find($id);
        if (isset($banner)) {
            return view('banners-editar', compact('banner'));
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
        $banner = Banner::find($id);
        if (isset($banner)) {
            $banner->titulo = $request->input('titulo');
            $banner->texto = $request->input('texto');
            $banner->user_id = 1;
            $banner->status = $request->input('status');
            if ($request->hasFile('imagem')) {
                $path = $request->file('imagem')->store('imgBanners', 'public');
                $banner->imagem = $path;
            }
            $banner->save();
        }
        return redirect('/banners');
        
        // $banner = Banner::find($id);
        // if (isset($banner)) {
        //     $banner->titulo = $request->input('titulo');
        //     $banner->texto = $request->input('texto');
        //     $banner->user_id = 1;
        //     $banner->status = $request->input('status');
        //     if ($request->hasFile('imagem')) {
        //         $path = $request->file('imagem')->store('imgBanners', 'public');
        //         $banner->imagem = $path;
        //     }
        //     $banner->save();
        // }
        // return redirect('/banners');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $banner = Banner::find($id);
        if(isset($banner)){
            $banner->delete();
        }
        return redirect('/banners');
    }
}
