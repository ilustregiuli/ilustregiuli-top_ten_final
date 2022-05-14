<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets/boot/css/bootstrap.min.css')}}">

    <title>TOP 10 Lists</title>
  </head>

  <body>
    
    <div class="container">

      <div class="row bg-info">
        <div class="col-md-7">
          <strong>TOP 10 Lists</strong>
        </div>
        <div class="col-md-5">
          <p>
            <strong>Faça suas listas "TOP 10"</strong>
          </p>
          <p>
            <strong>Compartilhe com seus amigos!</strong>
          </p>   
        </div>
      </div>

      <div class="row bg-info">

        <div class="col-md-10">
          <a class="btn btn-dark" href="/" role="button">HOME</a>
        </div>

        <div class="col-md-1">
          <a class="btn btn-dark" href="/cadastrar" role="button">Cadastrar</a>
        </div>

        <div class="col-md-1">
          <a class="btn btn-dark" href="/logar" role="button">Entrar</a>
        </div>

      </div> 
    </div>

    <div class="container">
        @yield('conteudo')   
    </div>    

  </body>
</html>