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
                        <h1 class="h3 mb-0 text-gray-800">Programas do Governo</h1>
                    </div>
        
                    <!-- Content Row -->
                    <div class="row">
                        <div class="col-xl-12 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <h5 class="card-title">Programas publicados</h5>

                                    <div class="row no-gutters align-items-center">
                                        <table class="table table-ordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Título</th>
                                                    <th>Imagem</th>
                                                    <th>Texto</th>
                                                    <th>Criado por</th>
                                                    <th>Ações</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($programas as $prog)
                                                    <tr>
                                                        <td>{{$prog->id}}</td>
                                                        <td>{{$prog->titulo}}</td>
                                                        <td>{{$prog->imagem}}</td>
                                                        <td>{{$prog->texto}}</td>
                                                        <td>{{$prog->user_id}}</td>
                                                        
                                                        {{-- <td>{{$cat->noticias->count()}}</td> --}}
                                                        <td>
                                                            <a href="programas/editar/{{$prog->id}}" class="btn btn-sm btn-primary">Editar</a>
                                                            <a href="programas/apagar/{{$prog->id}}" class="btn btn-sm btn-danger">Apagar</a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> {{-- row --}}

                    <!-- Content Row -->
                    <!-- Content Row -->
                    <div class="row">
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-12 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <h5 class="card-title">Novo programa</h5>

                                    <div class="row no-gutters align-items-center">
                                        <form action="/programas" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            
                                            <div class="form-group">
                                                <label for="imagem">Imagem</label>
                                                <input type='file' id="imagem" name="imagem">
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="titulo">Título</label>
                                                <input type="text" class="form-control" name="titulo" id="titulo" required>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="texto">Texto</label>
                                                <textarea class="form-control" id="texto" name="texto" rows="7" required></textarea>
                                                    
                                            </div>
                                            <div class="form-group">
                                                <label for="status">Status</label>
                                                <select class="form-control" id="status" name="status" >
                                                    <option value="1" selected>Publicado</option>
                                                    <option value="0">Não publicado</option>
                                                </select>
                                            </div>
                                            


                                            <button type="submit" class="btn btn-primary">Enviar</button>
                                            <input type="button" name="Cancel" class="btn btn-danger" value="Cancel" onclick="window.location = '/noticias' " />
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        

                    </div> {{-- row --}}
    
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