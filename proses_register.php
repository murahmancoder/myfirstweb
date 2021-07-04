<?php


include_once('config.php');


$user_id = isset($_SESSION['user_id'])?$_SESSION['user_id']:false;

   if($user_id){
      header('location:index.php?page=list.php');
   }

   if(isset($_POST['submit'])){
         //tiap ngisi form diTangkap
         $nama = $_POST['nama'];
         $email = $_POST['email'];
         $password = md5($_POST['password']);
         $re_password = md5($_POST['re_password']);
   
         //data post disimpan dilink 
         unset($_POST['password']);
         unset($_POST['re_password']);
         //mengubah jadi url data dari post
         $dataform = http_build_query($_POST);

         //jika email sarua jang notif email
         $query = mysqli_query($koneksi, "SELECT * FROM user WHERE email='$email'");

         if(empty($nama) | empty($email)| empty($password)){
            header('location:index.php?page=register.php&notif=require&'.$dataform);
         }else if($password != $re_password){
            header('location:index.php?page=register.php&notif=password&'.$dataform);
         }else if(mysqli_num_rows($query) == TRUE){
            header('location:index.php?page=register.php&notif=email&'.$dataform);
         }else{
            mysqli_query($koneksi, "INSERT INTO user (nama, email, password)
                                 VALUES ('$nama', '$email', '$password')"
                                 );
            header('location:index.php?page=login.php');
      }

   }
   
?>