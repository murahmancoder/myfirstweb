<?php
include_once('config.php');

$page= isset($_GET['page'])?$_GET['page']:false;
$id = isset($_GET['id'])?$_GET['id']:false;

session_start();
$user_id = isset($_SESSION['user_id'])?$_SESSION['user_id']:false;



?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Naraman</title>
    <link rel="stylesheet" href="css/stylesheet.css">
    <link rel="stylesheet" href="css/responsive.css">
  </head>
  <body>
    <header>
      <div class="container">
        <div class="header-left">
          <a href="index.php?page=main.php">
          <img class="logo" src="img/logo.png"> 
          </a>
        </div>
        
        <div class="header-right">
          <a href="index.php?page=main.php">Home</a>
          <?php if($user_id){
            // jika telah login tampilkan
             echo "<a href='index.php?page=list.php' >Dashboard</a>";
             echo "<a href='logout.php' >Log Out</a>";
          }else{
            echo "<a href='index.php?page=register.php' >Daftar</a>";
            echo "<a href='index.php?page=login.php' >Log In</a>";
          }
          ?>
          
        </div>
      </div>
    </header>


    <?php
    // Isi page artikel ngambil dari url
      $namafile=$page;
      if(file_exists($namafile)){
         include_once($namafile);
      }else{
        include_once('main.php');
      }
   ?>

     

    <footer>
      <div class="container">
        <p>Belajar, Belajar, Latihan dan Latihan.</p>
        <p>
        <?php if($user_id){
            // jika telah login tampilkan
             echo "<a href='index.php?page=list.php' >Dashboard</a> | <a href='logout.php' >Log Out</a>";
          }else{
            echo "<a href='index.php?page=register.php' >Daftar</a> | <a href='index.php?page=login.php' >Log In</a>";
          }
          ?>
        </p>
      </div>
    </footer>

  
  </body>
</html>
