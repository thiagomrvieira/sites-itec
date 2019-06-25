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
                        <h1 class="h3 mb-0 text-gray-800">Novo vídeo</h1>
                    </div>
        
                    <!-- Content Row -->
                    <div class="row">
            
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-12 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <form action="/videos/editar/{{$video->id}}" method="POST">
                                            @csrf
                                            
                                            <div class="form-group">
                                                <label for="titulo">Título</label>
                                            <input type="text" class="form-control" name="titulo" id="titulo" required value="{{$video->titulo}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="subtitulo">Subtítulo</label>
                                                <input type="text" class="form-control" name="subtitulo" id="subtitulo" 
                                                    @if ($video->subtitulo != null)
                                                        value="{{$video->subtitulo}}"
                                                    @endif
                                                >
                                            </div>
                                            <div class="form-group">
                                                <label for="link">Link</label>
                                                <input type="text" class="form-control" name="link" id="link" required value="{{$video->link}}">
                                            </div>

                                            <button type="submit" class="btn btn-primary">Enviar</button>
                                            <input type="button" name="Cancel" class="btn btn-danger" value="Cancel" onclick="window.location = '/videos' " />
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