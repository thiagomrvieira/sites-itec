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
                        <h1 class="h3 mb-0 text-gray-800">Vídeos</h1>
                    </div>
        
                    <!-- Content Row -->
                    <div class="row">
                        <div class="col-xl-12 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <h5 class="card-title">Vídeos publicados</h5>
                                    <div class="row no-gutters align-items-center">
                                        <table class="table table-ordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Título</th>
                                                    <th>Link</th>
                                                    <th>Status</th>
                                                    <th>Imagem</th>
                                                    <!-- <th>Conteúdo</th> -->
                                                    <th>Data de publicação</th>
                                                    <th>Ações</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($videos as $video)
                                                    @if ($video->status == true)
                                                    <tr>
                                                        <td>{{$video->id}}</td>
                                                        <td>{{$video->titulo}}</td>
                                                        <td>{{$video->link}}</td>
                                                        <td>
                                                            @if ($video->status == true)
                                                                Publicado        
                                                            @else
                                                                Não publicado
                                                            @endif    
                                                        </td>
                                                        <td><img src="/storage/{{$video->imagem}}" height="70" width="70"></td>
                                                        <!-- <td>{!!$video->texto!!}</td> -->
                                                        <td>{{ \Carbon\Carbon::parse($video->criado_em)->format('d/m/Y H:i:s')}}</td>

                                                        <td>
                                                            <a href="videos/editar/{{$video->id}}" class="btn btn-sm btn-primary">Editar</a>
                                                            <a href="videos/apagar/{{$video->id}}" class="btn btn-sm btn-danger">Apagar</a>
                                                        </td>
                                                    </tr>
                                                    @endif
                                                    
                                                @endforeach
                                            </tbody>
                                        </table>    
                                    </div>
                                    <a href="videos/novo" class="btn btn-sm btn-primary">Novo vídeo</a>

                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->
                    <div class="row">
                        <div class="col-xl-12 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <h5 class="card-title">Vídeos não publicados</h5>
                                    <div class="row no-gutters align-items-center">
                                        <table class="table table-ordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Título</th>
                                                    <th>Link</th>
                                                    <th>Status</th>
                                                    <th>Imagem</th>
                                                    <!-- <th>Conteúdo</th> -->
                                                    <th>Data de publicação</th>
                                                    <th>Ações</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($videos as $video)
                                                    @if ($video->status == false)
                                                    <tr>
                                                        <td>{{$video->id}}</td>
                                                        <td>{{$video->titulo}}</td>
                                                        <td>{{$video->link}}</td>

                                                        <td>
                                                            @if ($video->status == true)
                                                                Publicado        
                                                            @else
                                                                Não publicado
                                                            @endif    
                                                        </td>
                                                        <td><img src="/storage/{{$video->imagem}}" height="70" width="70"></td>
                                                        <!-- <td>{!!$video->texto!!}</td> -->
                                                        <td>{{ \Carbon\Carbon::parse($video->criado_em)->format('d/m/Y H:i:s')}}</td>

                                                        <td>
                                                            <a href="videos/editar/{{$video->id}}" class="btn btn-sm btn-primary">Editar</a>
                                                            <a href="videos/apagar/{{$video->id}}" class="btn btn-sm btn-danger">Apagar</a>
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