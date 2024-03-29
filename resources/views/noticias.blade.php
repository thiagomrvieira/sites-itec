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
                @if (count($categorias) < 1)
                    <div class="alert alert-danger hidden" role="alert">
                        <a href="/noticias/categorias" class="alert-link">Crie uma categoria</a>  antes de criar uma notícia.
                    </div>
                @endif
                
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
                                                    <th>Criado em</th>
                                                    <th>Ações</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($noticias as $not)
                                                    @if ($not->status == true)
                                                    <tr>
                                                        <td>{{$not->id}}</td>
                                                        <td>{{$not->titulo}}</td>
                                                        <td>
                                                            @if ($not->status == true)
                                                                Publicado        
                                                            @else
                                                                Não publicado
                                                            @endif    
                                                        </td>
                                                        <td>
                                                            @if ($not->destaque == true)
                                                                Sim        
                                                            @else
                                                                Não
                                                            @endif
                                                        </td>
                                                        <td>{{$not->categoria->categoria}}</td>
                                                        <td>
                                                            @if($not->imagem)
                                                                <img src="storage/{{$not->imagem}}" height="70" width="70">
                                                            @else
                                                            Sem imagem
                                                            @endif
                                                        </td>
                                                        <td>{{ \Carbon\Carbon::parse($not->criado_em)->format('d/m/Y H:i:s')}}</td>

                                                        <td>
                                                            <a href="noticias/editar/{{$not->id}}" class="btn btn-sm btn-primary">Editar</a>
                                                            <a href="noticias/apagar/{{$not->id}}" class="btn btn-sm btn-danger">Apagar</a>
                                                        </td>
                                                    </tr>
                                                    @endif
                                                    
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
                                        <table class="table table-ordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Título</th>
                                                    <th>Status</th>
                                                    <th>Destaque</th>
                                                    <th>Categoria</th>
                                                    <th>Imagem</th>
                                                    <th>Criado em</th>
                                                    <th>Ações</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($noticias as $not)
                                                    @if ($not->status == false)
                                                    <tr>
                                                        <td>{{$not->id}}</td>
                                                        <td>{{$not->titulo}}</td>
                                                        <td>
                                                            @if ($not->status == true)
                                                                Publicado        
                                                            @else
                                                                Não publicado
                                                            @endif    
                                                        </td>
                                                        <td>
                                                            @if ($not->destaque == true)
                                                                Sim        
                                                            @else
                                                                Não
                                                            @endif
                                                        </td>
                                                        <td>{{$not->categoria->categoria}}</td>
                                                        <td>
                                                            @if($not->imagem)
                                                                <img src="storage/{{$not->imagem}}" height="70" width="70">
                                                            @else
                                                            Sem imagem
                                                            @endif
                                                        </td>
                                                        <td>{{ \Carbon\Carbon::parse($not->criado_em)->format('d/m/Y H:i:s')}}</td>

                                                        <td>
                                                            <a href="noticias/editar/{{$not->id}}" class="btn btn-sm btn-primary">Editar</a>
                                                            <a href="noticias/apagar/{{$not->id}}" class="btn btn-sm btn-danger">Apagar</a>
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