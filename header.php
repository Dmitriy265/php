<?php session_start(); ?>

<!doctype html>
<html lang="ru">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title><?php echo $title ?></title>
    <style><?= $style ?></style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>




  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Домой <span class="sr-only">(current)</span></a>
      </li>
      
    </ul>
    <?php if ($_SESSION['id']): ?>
      <a href="exit.php" class="btn btn-success my-2 my-sm-0">Выйти</a>
    <?php else: ?> 
    <a href="auth.php" class="btn btn-success my-2 mr-2 my-sm-0">Войти</a>
    <a href="reg.php" class="btn btn-success my-2 my-sm-0">Регистрация</a> 
    <?php endif; ?> 
    
  </div>
</nav>
    
    
    
    
    
    
    
    







 
    
    
    
    