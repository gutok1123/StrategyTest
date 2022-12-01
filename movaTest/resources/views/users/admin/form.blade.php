<div class="form-group">
    <label for="name">Nome</label>
    <input type="name" class="form-control" id="name" name="name" value={{isset($data) ? $data->name : ''}}>
</div>

<div class="form-group">
    <label for="last_name">Sobrenome</label>
    <input type="last_name" class="form-control" id="last_name" name="last_name" value={{isset($data) ? $data->name : ''}}>
</div>

    <div class="form-group">
        <label for="exampleInputEmail1">Endereço de e-mail</label>
        <input type="email" class="form-control" id="exampleInputEmail1" name="email"  value={{isset($data) ? $data->email : ''}}>
    </div>

    <input type="id" class="form-control" id="exampleInputEmail1" name="id" style="display:none" value={{isset($data) ? $data->id : ''}} >

    @if(!isset($data))
    <div class="form-group mb-5">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="password">
    </div>

    <div class="form-group">
        <label>Tipo De Usuário</label>
        <Select class="form-control" name="type">
            <option value="user" selected>User Comum</option>
            <option value="admin">Admin</option>
        </Select>
    </div>
@endif