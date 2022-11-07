<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pet's Home | Вход</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  
  <?php require 'header.php'; ?>

  <div class="auth">
    <div class="container">
      <div class="auth__inner d-flex align-items-center flex-column justify-content-center">
        <h3>Вход</h3>
        <form method="POST" action="php_scripts/login_user.php" class="auth__form col-4">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Логин</label>
            <input type="text" name="login" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text"></div>
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Пароль</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
          </div>
          <button type="submit" class="btn btn-primary">Войти</button>
        </form>
      </div>
    </div>
  </div>

  <script src="scripts/bootstrap.bundle.js"></script>
  <script src="scripts/jquery-3.3.1.min.js"></script>
  <script src="scripts/main.js"></script>
</body>
</html>