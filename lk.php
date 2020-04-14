<?php

  session_start();
  if(!$_SESSION['id']) {
    header('Location: auth.php');// перенаправление на страницу //
  }
    //include() / include_once(); // без проверки ошибки - грузит всё
    //require() / require_once(); // В основном используется этот метод подключения 90
  $title = "Личный кабинет";
  $style ='
      td {
        font-size: 22px;
      } 
      table {
        width: 100%;
        margin-top: 50px;
      }
      .fa-pencil, .fa-check, .fa-times {
        cursor: pointer;
      }
      
  ';   
  require_once('site_components/header.php');
?>

    <div class="container">
      <div class="row justify-content-center">
       <div class="col-6">
         <h1 class="text-centr mt-5">Личный кабинет</h1>
         <h4>Здравствуйте, <span><?php echo $_SESSION['name'] ?></span></h4>
         <table>
           <tr>
             <td>Логин:</td>
             <td class="data" data="login"><?php echo $_SESSION['login'];?></td>
           </tr>
           <tr>
             <td>Фамилия:</td>
             <td class="data" data="lastname"><?php echo $_SESSION['lastname'];?></td>
             <td>
               <span class="edit">
                <i class="fa fa-pencil" aria-hidden="true"></i> 
               </span>
               <span class="startedit d-none">
                 
                 <i class="fa fa-check" aria-hidden="true"></i>
                 <i class="fa fa-times" aria-hidden="true"></i> 
               </span>
             </td>
           </tr>
           <tr>
             <td>Имя:</td>
             <td class="data" data="name"><?php echo $_SESSION['name'];?></td>
              <td>
               <span class="edit">
                <i class="fa fa-pencil" aria-hidden="true"></i> 
               </span>
               <span class="startedit d-none">
                 
                 <i class="fa fa-check" aria-hidden="true"></i>
                 <i class="fa fa-times" aria-hidden="true"></i> 
               </span>
             </td>
           </tr>
           <tr>
             <td>Оечество:</td>
             <td class="data" data="patronymic"><?php echo $_SESSION['patronymic'];?></td>
              <td>
               <span class="edit">
                <i class="fa fa-pencil" aria-hidden="true"></i> 
               </span>
               <span class="startedit d-none">
                 
                 <i class="fa fa-check" aria-hidden="true"></i>
                 <i class="fa fa-times" aria-hidden="true"></i> 
               </span>
             </td>
           </tr>
           <tr>
             <td>Дата рождения:</td>
             <td class="data" data="birthdate"><?php echo $_SESSION['birthdate'];?></td>
              <td>
               <span class="edit">
                <i class="fa fa-pencil" aria-hidden="true"></i> 
               </span>
               <span class="startedit d-none">
                 
                 <i class="fa fa-check" aria-hidden="true"></i>
                 <i class="fa fa-times" aria-hidden="true"></i> 
               </span>
              </td>
           </tr>
         </table>
       </div> 
      </div>
    </div>
    <script>
      let pens = document.querySelectorAll('.fa-pencil');
      for (let i = 0; i < pens.length; i++) {
        pens[i].onclick = startEdit;
      }
      function startEdit() {
        let buttonsTd = this.parentElement.parentElement;
        let dataTd = buttonsTd.previousElementSibling;
        
        let previousData = dataTd.innerHTML;
        let dataName = dataTd.getAttribute('data');
        if (dataName == "birthdate") {
          dataTd.innerHTML = `<input type='date' name='${dataName}' placeholder='Введите новые данные' value='${previousData}'>`;
        } else {
          dataTd.innerHTML = `<input type='text' name='${dataName}' placeholder='Введите новые данные' value='${previousData}'>`;
        }
        
        
        let editSpan = buttonsTd.querySelector('.edit');
        let startEditSpan = buttonsTd.querySelector('.startedit');
        
        startEditSpan.classList.remove('d-none');
        editSpan.classList.add('d-none');
        
        let okBtn = buttonsTd.querySelector('.fa-check');
        let denyBtn = buttonsTd.querySelector('.fa-times');
        
        denyBtn.onclick = () => {
          startEditSpan.classList.add('d-none');
          editSpan.classList.remove('d-none');
          dataTd.innerHTML = previousData;
        } 
        okBtn.onclick = () => {
          let newData = dataTd.querySelector('input').value;
          let formData = new FormData();
          formData.append(dataName, newData);
          fetch('lk_obr.php', { // fetch  является promise обещание сделать, так как ответ с сервера приходит не сразу
            method: 'POST',
            body: formData,
          })
            .then(response => response.text())// переводим ответ в текст
            .then(result => {
              if (result == "Данные обновлены") {
                startEditSpan.classList.add('d-none');
                editSpan.classList.remove('d-none');
                dataTd.innerHTML = newData;
              } else {
                console.log(result);
                denyBtn.click();
              }  
            })
        }
        
      }
  
    </script>    

<? require_once('site_components/footer.php'); ?>
