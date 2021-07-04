<div class="lesson-wrapper">
<div class="container">
   <div class="heading">
      <h2>DAFTAR ADMIN</h2>
   </div>


   <form action="proses_register.php" method="post">

   <?php

   // Muncul notif jika ada get notif dari url
      $notif = isset($_GET['notif']) ? $_GET['notif'] : false;
      $nama = isset($_GET['nama']) ? $_GET['nama'] : false;
      $email = isset($_GET['email']) ? $_GET['email'] : false;

   // Menampilkan notif
      if ($notif == 'require'){
         echo '<div class="notif"> Maaf ada yang kosong Data harus lengkap </div>';
      }else if($notif == 'password'){
         echo '<div class="notif"> Maaf Password tidak sama </div>';
      }else if($notif == 'email'){
         echo '<div class="notif"> Maaf Email sudah digunakan </div>';
      }
   ?>

     
         <label>Nama </label><br>
            <input type="text" name="nama" autocomplete="off" value="<?= $nama;?>">
         <br>
         <label>Email </label><br>
            <input type="text" name="email" value="<?= $email;?>">
         <br>
         <label>Password </label><br>
            <input type="password" name="password">
         <br>
         <label>Re-Password </label><br>
            <input type="password" name="re_password">
        <br>
         
         <input type="submit" name="submit" class="btn signup" value="Register">
         

   </form>
   </div>
</div>