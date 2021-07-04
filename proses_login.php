<?php
include_once('config.php');


if(isset($_POST['submit'])){

   // Data input ditangkap
   $nama= $_POST['nama'];
   $password= md5($_POST['password']);


   //cek ka database email dan pw
   $query = mysqli_query($koneksi, "SELECT * FROM user WHERE nama='$nama' AND password='$password'");

   if(mysqli_num_rows($query) == TRUE){
      $row = mysqli_fetch_assoc($query);
      
      session_start();
      //tiap data nu di db disimpan di session 
      $_SESSION['nama']= $row['nama'];
      $_SESSION['user_id']= $row['user_id'];

      header('location:index.php?page=list.php');
   }else{
      header('location:index.php?page=login.php&notif=true'); 
   }
}
  

?>