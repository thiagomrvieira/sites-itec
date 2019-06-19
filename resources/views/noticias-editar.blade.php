@extends('layouts.template')

@section('body')
    <!-- Page Wrapper -->
    <div id="wrapper">
    
        <!-- Sidebar -->
        @component('layouts.sidebar')
        @endcomponent
        
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
    
            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                @component('layouts.topbar')
                @endcomponent
        
                <!-- Begin Page Content -->
                <div class="container-fluid">
        
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Editar notícia</h1>
                    </div>
        
                    <!-- Content Row -->
                    <div class="row">
            
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-12 col-md-6 mb-4">
                        <div class="card border-left-success shadow h-100 py-2">
                            <div class="card-body">
                            <div class="row no-gutters align-items-center">
                            <form action="/noticias/editar/{{$noticia->id}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-7 pr-1">
                                            <div class="form-group">
                                                <label for="imagem">Imagem</label>
                                                <input type='file' id="imagem" name="imagem">
                                            </div>
                                        </div>
                                        <div class="col-md-5 pl-1">
                                            <div class="form-group">
                                                <label for="autoria">Autoria da imagem</label>
                                                <input type="text" class="form-control" name="autoria" id="autoria" value="{{$noticia->autor_imagem}}">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <label for="categoria">Categoria</label>
                                        <select class="form-control" id="categoria" name="categoria" >
                                            @foreach ($categorias as $cat)
                                                <option value="{{$cat->id}}" selected>{{$cat->categoria}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="titulo">Título</label>
                                        <input type="text" class="form-control" name="titulo" id="titulo" required value="{{$noticia->titulo}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="chapeu">Chapéu</label>
                                        <input type="text" class="form-control" name="chapeu" id="chapeu" required value="{{$noticia->chapeu}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="intro">Introdução</label>
                                        <input type="text" class="form-control" name="intro" id="intro" required value="{{$noticia->intro}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="reporter">Repórter</label>
                                        <input type="text" class="form-control" name="reporter" id="reporter" required value="{{$noticia->reporter}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="texto">Texto</label>
                                        <textarea class="form-control" id="texto" name="texto" rows="7" required>{!!$noticia->texto!!}</textarea>  
                                    </div>
                                    <div class="form-group">
                                        <label for="status">Status</label>
                                        <select class="form-control" id="status" name="status" >
                                            <option value="1" selected>Publicado</option>
                                            <option value="0">Não publicado</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="destaque">Destaque</label>
                                        <select class="form-control" id="destaque" name="destaque" >
                                            <option value="1">Sim</option>
                                            <option value="0" selected>Não</option>
                                        </select>
                                    </div>
                                    
                                    <button type="submit" class="btn btn-primary">Enviar</button>
                                    <input type="button" name="Cancel" class="btn btn-danger" value="Cancel" onclick="window.location = '/noticias' " />
                                </form>
                            </div>
                            </div>
                        </div>
                        </div>
            
                        

                    </div>
    
                </div>
                <!-- /.container-fluid -->
        
            </div>
            <!-- End of Main Content -->
    
          <!-- Footer -->
          @component('layouts.footer')
          @endcomponent
          <!-- End of Footer -->
    
        </div>
        <!-- End of Content Wrapper -->
    
    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to top button -->
    @component('layouts.top-button')
    @endcomponent

@endsection