<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SGR - Sistema de Gestão de Recursos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="display-4 text-center">Sistema de Gestão de Recursos</h1>
            </div>
        </div>
        <form action="#" method="post" class="form-control m-3 p-3">
            <div class="row mb-3">
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <label for="login">Login</label>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-9">
                    <input type="text" name="login" id="login" class="form-control">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <label for="senha">Senha</label>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-9">    
                <input type="password" name="senha" id="senha" class="form-control">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <button class="btn btn-large btn-success form-control" value="Enviar">
                     Enviar
                    </button>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <button class="btn btn-large btn-danger form-control">Sair</button>
                </div>
            </div>
        </form>
    </div>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

<script>
      var Zaia = {
        AgentURL: "https://platform.zaia.app/embed/chat/15052"
      };
    </script>
    <!-- Widget Loader Script -->
    <script src="https://cdn.zapgpt.com.br/widget-loader.js"></script>
</body>
</html>