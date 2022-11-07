
  <header class="">
    <div class="container h-100">
      <div class="header__inner d-flex align-items-center justify-content-between h-100">
        <div class="header__logo">
          <a href="index.php"><img src="media/logo.png" alt="" class="header__logo-img"></a>
        </div>
        <div class="">
          <nav class="header__nav navbar">
          <ul class="d-flex list-unstyled navbar-nav flex-row">
            <li class="nav-item m-3"><a class="nav-link" href="index.php">О нас</a></li>
            <li class="nav-item m-3"><a class="nav-link" href="catalog.php">Каталог</a></li>
            <li class="nav-item m-3"><a class="nav-link" href="location.php">Где нас найти?</a></li>
          </ul>
        </nav>
        </div>
        <div class="header__auth">
          <? if (isset($_SESSION['auth']) && $_SESSION['auth']): ?>
            <a href="#" class="btn btn-warning">Корзина</a>
            <a href="php_scripts/logout.php">
              <button type="submit" class="btn btn-danger">Выйти</button>
            </a>
          <? else: ?>
            <a href="login.php" class="btn btn-primary">Вход</a>
            <a href="register.php" class="btn btn-secondary">Регистрация</a>
          <? endif; ?>
        </div>
      </div>
    </div>
  </header>
