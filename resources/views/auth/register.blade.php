@extends('layouts.app-register')

@section('content')

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Crie uma conta!</h1>
              </div>
              <form class="user" method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-group row">
                  <div class="col-sm-12 mb-6 mb-sm-0">
                    <input id="name" type="text" class="form-control form-control-user @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Nome">
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror 
                </div>
                </div>
                <div class="form-group">
                    <input id="email" type="email" class="form-control form-control-user @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="E-mail">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input id="password" type="password" class="form-control form-control-user @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Senha">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror  
                </div>
                  <div class="col-sm-6">
                    <input id="password-confirm" type="password" class="form-control form-control-user" name="password_confirmation" required autocomplete="new-password" placeholder="Repetir senha">  
                </div>
                </div>
                
                <button type="submit" class="btn btn-primary btn-user btn-block">
                    {{ __('Criar conta') }}
                </button>
                
            
              </form>
              <hr>
              <div class="text-center">
                <a class="small" href="login.html">Fazer login</a>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
  @endsection
