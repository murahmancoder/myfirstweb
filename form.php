<?php
// defaultnya kosong jika dalam form tambah
$judul = '';
$penulis = '';
$tanggal = '';
$artikel = '';
$gambar = '';
$button="Tambah";

// jika mengirim id maka diisi
if($id){
$query= mysqli_query($koneksi,"SELECT * FROM artikel WHERE id='$id'");
$row=mysqli_fetch_assoc($query);
$judul = $row['judul'];
$penulis = $row['penulis'];
$artikel = $row['artikel'];
$gambar = $row['gambar'];
$button = "Ubah Artikel";
}

?>

<div class="container">

   <div class="tengah">

   <form action="action.php?id=<?=$id;?>" method="post" enctype="multipart/form-data">
         <label >Gambar Cover :
            <input type="file" name="gambar" class="form"><?= $gambar?"<p style='color:red;'>Masukan Lagi Gambar sebelumnya yaitu :  ". $gambar."</p>":'';?>
         </label> <br>

         <label>JUDUL </label><br>
            <input type="text" name="judul" class="form" value="<?= $judul;?>"><br>
         </label>
         <label> PENULIS </label><br>
            <input type="text" name="penulis" class="form" value="<?= $penulis;?>"><br>
        
         <label> ARTIKEL </label><br>
            <textarea name="artikel" rows="11" class="form"><?= $artikel;?></textarea><br>
        
         
         <input type="submit" name="button" value="<?= $button;?>" class="btn blue">
    
   </form>
   </div>
</div>