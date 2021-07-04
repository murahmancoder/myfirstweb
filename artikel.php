<?php 

// isi artikel sesuai id yang diklik
$query = mysqli_query($koneksi,"SELECT * FROM artikel WHERE id='$id'");
$row = mysqli_fetch_assoc($query);
$judul=$row['judul'];
$penulis=$row['penulis'];
$tanggal=$row['tanggal'];
$artikel=$row['artikel'];
$gambar=$row['gambar'];


?>

 <div class="container">
       <div class="content">
              <center>
              <h1><?=$judul;?></h1>
              <img src="img/<?=$gambar;?>" width="100%" height="480px">
              </center>
              <p style="color:#55acee ;"><small><b>Penulis : <?=$penulis;?></b></small> | <small><i>publish <?=$tanggal;?></i></small></p>
              <p><?=$artikel;?></p>
       </div>
</div>
   