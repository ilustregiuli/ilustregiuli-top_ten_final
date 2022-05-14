@extends('layout.principal')

@section('conteudo')

        <div>
        <form>

          <div class="row form-group">
            <div class="col-md-4" >
              <label for="exampleInputEmail1"><strong>Login</strong></label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="digite seu email">
            </div>  
          </div>

          <div class="row form-group">
            <div class="col-md-4" >
              <label for="exampleInputPassword1"><strong>Senha</strong></label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="digite sua senha">
            </div>  
          </div>

          <button type="submit" class="btn btn-success">Entrar</button>
        </form>
    </div>

@endsection