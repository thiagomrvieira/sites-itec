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
                        <h1 class="h3 mb-0 text-gray-800">Notícias</h1>
                    </div>
        
                    <!-- Content Row -->
                    <div class="row">
                        <div class="col-xl-12 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <h5 class="card-title">Notícias publicadas</h5>
                                    <div class="row no-gutters align-items-center">
                                        <table class="table table-ordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Título</th>
                                                    <th>Status</th>
                                                    <th>Destaque</th>
                                                    <th>Categoria</th>
                                                    <th>Imagem</th>
                                                    <th>Ações</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($noticias as $not)
                                                    <tr>
                                                        <td>{{$not->id}}</td>
                                                        <td>{{$not->titulo}}</td>
                                                        <td>{{$not->status}}</td>
                                                        <td>{{$not->destaque}}</td>
                                                        <td>{{$not->categoria->categoria}}</td>
                                                        <td>
                                                            @if($not->imagem)
                                                                <img src={{$not->imagem}} alt="capa" height="80" width="80">
                                                            @else
                                                            Sem imagem
                                                            @endif
                                                        </td>
                                                        <td>
                                                            <a href="noticias/editar/{{$not->id}}" class="btn btn-sm btn-primary">Editar</a>
                                                            <a href="noticias/apagar/{{$not->id}}" class="btn btn-sm btn-danger">Apagar</a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>    
                                    </div>
                                    <a href="noticias/novo" class="btn btn-sm btn-primary">Nova notícia</a>

                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->
                    <div class="row">
                        <div class="col-xl-12 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <h5 class="card-title">Notícias não publicadas</h5>
                                    <div class="row no-gutters align-items-center">
                                        
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