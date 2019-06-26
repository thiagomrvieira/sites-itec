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
                        <h1 class="h3 mb-0 text-gray-800">Editar galeria de fotos</h1>
                    </div>
        
                    <!-- Content Row -->
                    <div class="row">
            
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-12 col-md-6 mb-4">
                        <div class="card border-left-success shadow h-100 py-2">
                            <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <form action="/fotos/editar/{{$foto->id}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-7 pr-1">
                                            <div class="form-group">
                                                <label for="imagem">Imagem</label>
                                                <input type='file' id="imagem" name="imagem">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="titulo">Título</label>
                                        <input type="text" class="form-control" name="titulo" id="titulo" required value="{{$foto->titulo}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="texto">Texto</label>
                                        <textarea class="form-control" id="texto" name="texto" rows="7" required>{!!$foto->texto!!}</textarea>  
                                    </div>
                                    <div class="form-group">
                                        <label for="status">Status</label>
                                        <select class="form-control" id="status" name="status" >
                                            @if ($foto->status == true)
                                                <option value="1" selected>Publicado</option>
                                                <option value="0">Não publicado</option>
                                            @else
                                                <option value="1">Publicado</option>
                                                <option value="0" selected>Não publicado</option>
                                            @endif
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