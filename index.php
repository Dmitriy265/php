<?php
  require_once('../site_components/header.php');
?>
<div class="container">
  <div class="row justify-content-center">
    <div class="col-8">
      <h1 class="text-center">Узнать ИНН</h1>
      <form action="inn_obr.php" method="POST">
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
                <input type="date" class="form-control" aria-label="Имя пользователя" aria-describedby="basic-addon1" name="birthdate">
              </div>
              <p>Номер паспорта</p>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1"><i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                  </span>
                </div>
                
                <input type="text" class="form-control" aria-label="Имя пользователя" aria-describedby="basic-addon1" name="docno" placeholder="Номер паспорта">
              </div>
             
              <!-- <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">@</span>
              </div>
              <input type="text" class="form-control" placeholder="Имя пользователя" aria-label="Имя пользователя" aria-describedby="basic-addon1"> // --------------------ОДИН КОНТЕЙНЕР -------------------------//
              </div> -->
              <p class="d-none text-danger error-message"></p>
              <input type="submit" class="btn btn-primary btn-block mt-2 mb-5" value="Узнать ИНН">
              <!-- <input type="submit" class="btn btn-primary btn-block mt-2" value="Зарегистрироваться">//---КНОПКА СИНЯЯ -->
      </form>
    </div>
  </div>
</div>

<?php
  require_once('../site_components/footer.php');
  
?>
