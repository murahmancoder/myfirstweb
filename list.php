<?php
include_once('config.php');

// tangkap id
$id = isset($_GET['id'])?$_GET['id']:false;

?>

<div class="container">

	<div class="tengah">
	<a href="index.php?page=form.php" class="btn blue">+ Tambah Artikel</a>

	<table border="1" cellspacing="0" cellpadding="20">
		<tr>
			<td>NO</td>
			<td>Gambar</td>
			<td>Artikel</td>
			<td>Aksi</td>
		</tr>

		<tr>
			<?php
			// Menampilkan list tabel dan artikel
			 $query= mysqli_query($koneksi,"SELECT * FROM artikel ");
			 $no=1;
				while($row = mysqli_fetch_assoc($query)){
					echo "<tr>";
					echo"<td align='center'>".$no++."</td>";
					echo"<td align='center'><a href='index.php?page=artikel.php&id=$row[id]'>
					<img src='img/$row[gambar]' width=100px >
					</a></td>";
					echo"<td>".$row['judul']."</td>";
					echo"<td><a href='index.php?page=form.php&id=$row[id]' class='btn azure'>Edit</a> 
					<a href='javascript:hapusData(".$row['id'].")' class='btn delete'>Hapus</a>
					</td>";
					echo "</tr>";
				}
			
			?>
		</tr>
	</table>
	
</div>
</div>
<script>
function hapusData(id){
		if (confirm("Apakah anda yakin akan menghapus data ini?")){
			window.location.href = 'action.php?id=' + id;
		}
		}
</script>   