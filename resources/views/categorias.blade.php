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
                            Crie uma categoria antes de criar uma notícia.
                        </div>
                    @endif
                    
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Categorias</h1>
                    </div>
        
                    <!-- Content Row -->
                    <div class="row">
                        <div class="col-xl-7 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <h5 class="card-title">Categorias publicadas</h5>

                                    <div class="row no-gutters align-items-center">
                                        <table class="table table-ordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Nome da categoria</th>
                                                    <th>Itens nessa categoria</th>
                                                    <th>Ações</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($categorias as $cat)
                                                    <tr>
                                                        <td>{{$cat->id}}</td>
                                                        <td>{{$cat->categoria}}</td>
                                                        <td></td>
                                                        {{-- <td>{{$cat->noticias->count()}}</td> --}}
                                                        <td>
                                                            <a href="categorias/editar/{{$cat->id}}" class="btn btn-sm btn-primary">Editar</a>
                                                            <a href="categorias/apagar/{{$cat->id}}" class="btn btn-sm btn-danger">Apagar</a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>    
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-5 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <h5 class="card-title">Criar categoria</h5>
                                    <hr>

                                    <div class="row no-gutters align-items-center">
                                        <form action="/noticias/categorias" method="POST">
                                            @csrf
                                        
                                            <div class="form-group">
                                                <label for="categoria">Nome da categoria:</label>
                                                <input type="text" class="form-control" name="categoria" id="categoria" required>
                                            </div>
                                            
                                            <button type="submit" class="btn btn-primary">Enviar</button>
                                            
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