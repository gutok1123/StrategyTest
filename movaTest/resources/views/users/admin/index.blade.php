@extends('dashboard.components.structure')
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

                                <h6 class="h5 mb-0">{{"Bem vindo a aba de registros!"}}</h6>
                                <p class="text-muted mt-2 mb-5">Prossiga com o registro.</p>

                                <form  action="{{route('user.admin.register.store')}}" method="POST">
                                    @csrf
                                    @include('users.admin.form')
                                    <button type="submit" class="btn btn-theme">Submeter</button>
                                </form>
                            </div>
                        </div>
                    </div>
               
                </div>
            </div>
        </div>
    </div>
</div>

@endsection