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
                        <h1 class="h3 mb-0 text-gray-800">Banners</h1>
                    </div>
        
                    <!-- Content Row -->
                    <div class="row">
                        <div class="col-xl-12 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <h5 class="card-title">Banners publicados</h5>
                                    <div class="row no-gutters align-items-center">
                                        <table class="table table-ordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Título</th>
                                                    <th>Status</th>
                                                    <th>Imagem</th>
                                                    <th>Texto</th>
                                                    <th>Ações</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($banners as $ban)
                                                    @if ($ban->status == true)
                                                    <tr>
                                                        <td>{{$ban->id}}</td>
                                                        <td>{{$ban->titulo}}</td>
                                                        <td>
                                                            @if ($ban->status == true)
                                                                Publicado        
                                                            @else
                                                                Não publicado
                                                            @endif
                                                        </td>
                                                        <td>
                                                            <img src="storage/{{$ban->imagem}}" height="70" width="70"> 
                                                        </td>
                                                        <td>{!!$ban->texto!!}</td>
                                                        <td>
                                                            <a href="banners/editar/{{$ban->id}}" class="btn btn-sm btn-primary">Editar</a>
                                                            <a href="banners/apagar/{{$ban->id}}" class="btn btn-sm btn-danger">Apagar</a>
                                                        </td>
                                                    </tr>
                                                    @endif
                                                @endforeach
                                            </tbody>
                                        </table>    
                                    </div>
                                    <a href="banners/novo" class="btn btn-sm btn-primary">Novo banner</a>

                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->
                    <div class="row">
                        <div class="col-xl-12 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <h5 class="card-title">Banners não publicados</h5>
                                    <div class="row no-gutters align-items-center">
                                        <table class="table table-ordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Título</th>
                                                    <th>Status</th>
                                                    <th>Imagem</th>
                                                    <th>Texto</th>
                                                    <th>Ações</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($banners as $ban)
                                                    @if ($ban->status == false)
                                                    <tr>
                                                        <td>{{$ban->id}}</td>
                                                        <td>{{$ban->titulo}}</td>
                                                        <td>
                                                            @if ($ban->status == true)
                                                                Publicado        
                                                            @else
                                                                Não publicado
                                                            @endif
                                                        </td>
                                                        <td>
                                                            <img src="storage/{{$ban->imagem}}" height="70" width="70"> 
                                                        </td>
                                                        <td>{!!$ban->texto!!}</td>
                                                        <td>
                                                            <a href="banners/editar/{{$ban->id}}" class="btn btn-sm btn-primary">Editar</a>
                                                            <a href="banners/apagar/{{$ban->id}}" class="btn btn-sm btn-danger">Apagar</a>
                                                        </td>
                                                    </tr>
                                                    @endif
                                                @endforeach
                                            </tbody>
                                        </table>
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