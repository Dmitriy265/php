<!doctype html>
<html lang="ru">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Регистрация</title>
  </head>
  <body>
    <!-- .container-fluid.row.justtify-content-centr>.col-8 и нажать ТАВ// -->
    <div class="container-fluid">
      <div class="row justtify-content-centr mt-5">
        <div class="col-8">
          <h1 class="text-center">Регистрация</h1>
            <!-- <form action="#">//--------------куда передавать данные-------------------//-->
            <!--  <form action="#" metod="GET"> ================ когда видно данные куда направляется===============-->
          <form action="reg_obr.php" method="POST"> 
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"><i class="fa fa-user" aria-hidden="true"></i>
                </span>
              </div>
              <input type="text" class="form-control" placeholder="Введите Login" aria-label="Имя пользователя" aria-describedby="basic-addon1" name="login">
              </div>
              <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"><i class="fa fa-unlock-alt" aria-hidden="true"></i>
              </span>
              </div>
              <input type="password" class="form-control" placeholder="Введите пароль" aria-label="Имя пользователя" aria-describedby="basic-addon1" name="pass">
              </div>
              <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"><i class="fa fa-unlock-alt" aria-hidden="true"></i>
              </span>
              </div>
              <input type="password" class="form-control" placeholder="Повторите пароль" aria-label="Имя пользователя" aria-describedby="basic-addon1" name="passrepeat">
              </div>
              <h2 class="text-center">Личная информация</h2>
              <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"><i class="fa fa-id-card" aria-hidden="true"></i>
                </span>
              </div>
              <input type="text" class="form-control" placeholder="Имя" aria-label="Имя пользователя" aria-describedby="basic-addon1" name="name">
              </div>
              <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"><i class="fa fa-id-card" aria-hidden="true"></i>
                </span>
              </div>
              <input type="text" class="form-control" placeholder="Фамилия" aria-label="Имя пользователя" aria-describedby="basic-addon1" name="lastname">
              </div>
              <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"><i class="fa fa-id-card" aria-hidden="true"></i>
                </span>
              </div>
              <input type="text" class="form-control" placeholder="Отчество" aria-label="Имя пользователя" aria-describedby="basic-addon1" name="patronymic">
              </div>
              <p>Дата рождения</p>
              <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"><i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                </span>
              </div>
              <input type="date" class="form-control" placeholder="Имя пользователя" aria-label="Имя пользователя" aria-describedby="basic-addon1" name="birthdate">
              </div>
              <!-- <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">@</span>
              </div>
              <input type="text" class="form-control" placeholder="Имя пользователя" aria-label="Имя пользователя" aria-describedby="basic-addon1"> // --------------------ОДИН КОНТЕЙНЕР -------------------------//
              </div> -->
              <input type="submit" class="btn btn-primary btn-block mt-2" value="Зарегистрироваться">
              <!-- <input type="submit" class="btn btn-primary btn-block mt-2" value="Зарегистрироваться">//---КНОПКА СИНЯЯ -->
              
          </form>
        </div>  
      </div>
    </div>
    

    <!-- Optional JavaScript -->
    <!-- <script src="https://use.fontawesome.com/ba9bffee9f.js"></script> // ================= ВСТАВЛЯЕТСЯ ССЫЛКА-------------- которая пришла на почту------------- В НЕЙ ИКОНКИ=================== //-->
    <script src="https://use.fontawesome.com/ba9bffee9f.js"></script>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>