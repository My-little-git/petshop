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
        <h3>Регистрация</h3>
        <form method="POST" action="php_scripts/register_user.php" class="auth__form col-6">
          <div class="row">
            <div class="col mb-3">
              <label for="name" class="form-label">Имя</label>
              <input type="text" required name="name" class="form-control" id="name">
            </div>
            <div class="col-7 mb-3">
              <label for="surname" class="form-label">Фамилия</label>
              <input type="text" required name="surname" class="form-control" id="surname">
            </div>
          </div>
          <div class="row">
            <div class="mb-3 col-7">
              <label for="patronymic" class="form-label">Отчество</label>
              <input type="text" name="patronymic" class="form-control" id="patronymic">
            </div>
            <div class="mb-3 col">
              <label for="login" class="form-label">Логин</label>
              <input type="text" required name="login" class="form-control" id="login">
            </div>
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" required name="email" class="form-control" id="email">
          </div>
          <div class="row">
            <div class="mb-3 col">
              <label for="password" class="form-label">Пароль</label>
              <input type="password" required name="password" class="form-control">
            </div>
            <div class="mb-3 col">
              <label for="repeat_password" class="form-label">Повторите пароль</label>
              <input type="password" required name="repeat_password" class="form-control">
            </div>
          </div>
          <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" name="rules" id="rules">
            <label class="form-check-label" for="rules">Я соглашаюсь с <a href="">правилами использования</a></label>
          </div>
          <button type="submit" class="btn btn-primary ms-auto">Войти</button>
        </form>
      </div>
    </div>
  </div>

  <script src="scripts/bootstrap.bundle.js"></script>
  <script src="scripts/jquery-3.3.1.min.js"></script>
  <script src="scripts/main.js"></script>
</body>
</html>