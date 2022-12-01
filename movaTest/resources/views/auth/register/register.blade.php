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
                                        <h3 class="h4 font-weight-bold text-theme">Cadastre-se</h3>
                                    </div>
    
                                    <h6 class="h5 mb-0">Bem vindo a aba de registros!</h6>
                                    <p class="text-muted mt-2 mb-5">Prossiga com o registro.</p>
    
                                    <form  action="{{route('store')}}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label for="name">Nome</label>
                                            <input type="name" class="form-control" id="name" name="name" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="last_name">Sobrenome</label>
                                            <input type="last_name" class="form-control" id="last_name" name="last_name" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Endereço de e-mail</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" name="email" required>
                                        </div>
                                        <div class="form-group mb-5">
                                            <label for="exampleInputPassword1">Password</label>
                                            <input type="password" class="form-control" id="exampleInputPassword1" name="password" required>
                                        </div>
                                        <button type="submit" class="btn btn-theme">Submeter</button>
                                        {{-- <a href="#l" class="forgot-link float-right text-primary">Esqueceu sua senha?</a> --}}
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
                
    
            </div>
            
        </div>
       
@endsection
   