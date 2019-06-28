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
                        <h1 class="h3 mb-0 text-gray-800">Definições do site</h1>
                    </div>
        
                    <!-- Content Row -->
                    <div class="row">
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-12 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                <form action="/definicoes/editar/{{$definicoes->id}}" method="POST">
                                        @csrf
                                        <h5 class="card-title">Informações básicas</h5>
                                        <hr>                                    
                                        <div class="row">
                                            <div class="col-md-8 pr-1">
                                                <div class="form-group">
                                                    <label for="nome">Nome da secretaria</label>
                                                    <input type="text" class="form-control" name="nome" id="nome" value="{{$definicoes->nome}}">
                                                </div>
                                            </div>
                                            <div class="col-md-4 pl-1">
                                                <div class="form-group">
                                                    <label for="sigla">Sigla</label>
                                                    <input type="text" class="form-control" name="sigla" id="sigla" value="{{$definicoes->sigla}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="telefone">Telefone</label>
                                            <input type="text" class="form-control" name="telefone" id="telefone" value="{{$definicoes->telefone}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="endereco">Endereço</label>
                                            <textarea class="form-control" id="texto" name="endereco" rows="7" required>{!!$definicoes->endereco!!}</textarea>
                                        </div>
                                        
                                        <br>
                                        <h5 class="card-title">Redes sociais</h5>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-6 pr-1">
                                                <div class="form-group">
                                                    <label for="facebook">Facebook</label>
                                                    <input type="text" class="form-control" name="facebook" id="facebook" value="{{$definicoes->facebook}}">
                                                </div>
                                            </div>
                                            <div class="col-md-6 pl-1">
                                                <div class="form-group">
                                                    <label for="youtube">Youtube</label>
                                                    <input type="text" class="form-control" name="youtube" id="youtube" value="{{$definicoes->youtube}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                                <div class="col-md-4 pr-1">
                                                    <div class="form-group">
                                                        <label for="instagram">Instagram</label>
                                                        <input type="text" class="form-control" name="instagram" id="instagram" value="{{$definicoes->instagram}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-4 px-1">
                                                    <div class="form-group">
                                                        <label for="twitter">Twitter</label>
                                                        <input type="text" class="form-control" name="twitter" id="twitter" value="{{$definicoes->twitter}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-4 pl-1">
                                                    <div class="form-group">
                                                        <label for="outro">Outro</label>
                                                        <input type="text" class="form-control" name="outro" id="outro" value="{{$definicoes->outra_rede}}">
                                                    </div>
                                                </div>
                                            </div>
                                        <br>
                                        <button type="submit" class="btn btn-primary">Salvar</button>
                                    </form>
                                </div> <!--row -->
                                </div> <!--card body -->
                            </div> <!--card border-left-warning shadow h-100 py-2 --> 
                        </div> <!-- col-xl-12 col-md-6 mb-4 --> 
                    </div> <!-- row --> 
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