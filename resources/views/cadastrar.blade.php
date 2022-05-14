@extends('layout.principal')

@section('conteudo')

  <div>
        <form>
            <div class="row form-group">
            <div class="col-md-4" >
                  <strong> Escolha um nome de usuário: </strong>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="nome de usuário">
                </div> 
              </div>
              <div class="row form-group">
                <div class="col-md-4" >
                  <strong> Digite aqui um e-mail válido: </strong>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="digite um email">
                </div>  
              </div>

              <div class="row form-group">
                <div class="col-md-4" >
                  <strong> Escolha uma senha: </strong>
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="digite uma senha">
                </div>  
              </div>
            <button type="submit" class="btn btn-success">Enviar</button>
        </form>
    </div>

@endsection


    


