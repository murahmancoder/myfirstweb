<?php

include_once('config.php');

// tangkap post yang diinputkan
$judul = $_POST['judul'];
$penulis = $_POST['penulis'];
$tanggal = date('Y-m-d');
$artikel = $_POST['artikel'];
$button = $_POST['button'];

// upload gambar
$gambar = isset($_FILES['gambar']['name'])?$_FILES['gambar']['name']:$row['gambar'];
move_uploaded_file($_FILES['gambar']['tmp_name'], "img/".$gambar);


if($button == "Tambah"){
   // proses insert data
$query = mysqli_query($koneksi, " INSERT INTO artikel (judul, penulis, tanggal, artikel, gambar)
                                  VALUES ('$judul', '$penulis', '$tanggal', '$artikel', '$gambar') ");
}else if($button == "Ubah Artikel"){
   // proses update data
   $id=$_GET['id'];
   $query = mysqli_query($koneksi, "UPDATE artikel SET 
                                    judul='$judul', 
                                    penulis='$penulis', 
                                    tanggal='$tanggal', 
                                    artikel='$artikel', 
                                    gambar='$gambar' WHERE id='$id'");
}else{
   // proses delete data
   $id =$_GET['id'];
   mysqli_query($koneksi, "DELETE FROM artikel WHERE id='$id'");
}

// dialihkan
header("Location:".BASE_URL."index.php?page=list.php");





