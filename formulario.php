<!DOCTYPE html>
<html lang="en">
<head>
  <title>Versionamento e Segurança</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Cadastro de Usuário</h2>
  <form action="gravar.php" method="POST">
  <div class="form-group">
      <label for="nome">Nome:</label>
      <input type="nome" class="form-control" id="nome" placeholder="Insira o  nome" name="nome">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Insira o  email" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Senha:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Escolha a sua senha" name="senha">
    </div>
   
    <button type="submit" class="btn btn-primary">Gravar</button>
    <button type="reset" class="btn btn-danger">Limpar</button>
  </form>
</div>

</body>
</html>

