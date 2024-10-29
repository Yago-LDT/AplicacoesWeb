<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link active" href="../index.php">Videos</a>
                <a class="nav-item nav-link" href="formcadastrar.php">Formulário</a>
            </div>
        </div>
    </nav>

<main class="form">
        <h2>Cadastre-se</h2>
        <form method="POST" action="../Controle/ControleVideos.php?ACAO=cadastrarvideo">
            <div class="form-group">
              <label for="exampleInputEmail1">Insira o nome do vídeo</label>
              <input type="text" class="form-control" id="nome" name="nome" aria-describedby="emailHelp" placeholder="Nome do vídeo">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Digite o link</label>
              <input type="text" class="form-control" id="link" name="link" placeholder="Link">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Digite o embed/link de incorporação:</label>
              <input type="text" class="form-control" id="embed" name="embed" placeholder="Embed">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
          </form>
    </main>

</body>
</html>