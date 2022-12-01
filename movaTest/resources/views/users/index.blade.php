@extends('dashboard.components.structure')
@section('content')

<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Usuários Cadastrados</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Sobrenome</th>
                            <th>Email</th>
                            <th>Data De Cadastro</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Nome</th>
                            <th>Sobrenome</th>
                            <th>Email</th>
                            <th>Data De Cadastro</th>
                            <th>Ações</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($all_users as $user )
                            <tr>
                                <td>{{$user->name}}</td>
                                <td>{{$user->last_name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{\Carbon\Carbon::parse($user->created_at)->format('d/m/Y')}}</td>
                                <td class="col-btn">
                                        <a class="btn btn-sm btn-default" href="{{route('user.admin.edit-show',$user->id)}}">
                                            <i class="fa  fa-pencil-alt"></i>
                                        </a>
                                        <a class="btn btn-sm btn-default" href="#">
                                            <i class="fa fa-eye"></i>
                                        </a> 
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>

@endsection