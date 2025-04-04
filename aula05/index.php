<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilo_index.css">
</head>
<body>
  <div class="container">
     <form action="processa.php" method="POST">
        <h2>Cadastre-se</h2>
         <!-- Email input -->
        <div data-mdb-input-init class="form-outline mb-4">
             <input type="email" id="form2Example1" class="form-control" name="email"  />
             <label class="form-label" for="form2Example1">Email address</label>
         </div>

         <!-- Password input -->
         <div data-mdb-input-init class="form-outline mb-4">
             <input type="password" id="form2Example2" class="form-control" name="senha" />
             <label class="form-label" for="form2Example2">Password</label>
         </div>



         <!-- Submit button -->
             <input type="submit" class="btn btn-primary btn-block mb-4" value="Entrar">
           

    </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>