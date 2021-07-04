<div class="lesson-wrapper">
<div class="container">
   <div class="heading">
      <h2>LOGIN ADMIN</h2>
   </div>


   <form action="proses_login.php" method="post">

   <?php
   // Muncul notif jika data tak sesuai
      $notif = isset($_GET['notif']) ? $_GET['notif'] : false;
   
      if ($notif == 'true'){
         echo '<div class="notif"> Maaf Data Salah</div>';
      }
   ?>

         <label>Nama </label> <br>
            <input type="text" name="nama"> <br>
         
         <label>Password </label> <br>
            <input type="password" name="password"> <br>
         
         <input type="submit" name="submit" value="Login" class="btn blue">

    
   </form>

   </div>
</div>