@extends('auth.bodyauth.body')
@section('content')
    <div id="main-wrapper" class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10">
                <div class="card border-0">
                    <div class="card-body p-0">
                        <div class="row no-gutters">
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="mb-5">
                                        <h3 class="h4 font-weight-bold text-theme">Login</h3>
                                    </div>
    
                                    <h6 class="h5 mb-0">Ola!</h6>
                                    <p class="text-muted mt-2 mb-5">Acesse nosso sistema com seu e-mail e password.</p>
                                    @if(session()->has('message'))
                                        <div class="alert alert-danger">
                                            {{ session()->get('message') }}
                                        </div>
                                    @endif
                                    <form action="{{route('auth')}}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Endereço de e-mail</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" name="email" required>
                                        </div>
                                        <div class="form-group mb-5">
                                            <label for="exampleInputPassword1">Password</label>
                                            <input type="password" class="form-control" id="exampleInputPassword1" name="password" required>
                                        </div>
                                        <button type="submit" class="btn btn-theme">Login</button>
                                        <a href="#l" class="forgot-link float-right text-primary">Esqueceu sua senha?</a>
                                    </form>
                                </div>
                            </div>
    
                            <div class="col-lg-6 d-none d-lg-inline-block">
                                <div class="account-block rounded-right">
                                    <div class="overlay rounded-right"></div>
                                    <div class="account-testimonial">
                                        <h4 class="text-white mb-4">Erp's Integration!</h4>
                                        <p class="lead text-white">"O melhor integrador de api's para o sistema de varejo"</p>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                    </div>
                   
                </div>
               
    
                <p class="text-muted text-center mt-3 mb-0">Você ainda não é cadastrado, registre-se? <a href="{{route('register')}}" class="text-primary ml-1">registrar</a></p>
    
                
    
            </div>
            
        </div>
        
@endsection
   