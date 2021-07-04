<div class="top-wrapper">
      <div class="container">
        <h1>WEB PROGRAMMING.</h1>
        <h1>BELAJAR DAN TINGKATKAN SKILL.</h1>
        <hr>
        <p>Naraman adalah platform online untuk belajar coding terutama web programming untuk mempermudah Anda memulai.</p>
        <br>
        <a href="#artikel" class="btn message">Mulai Baca</a>
       
      </div>
    </div>
    <div class="message-wrapper">
      <div class="container">
        <div class="heading" id="artikel">
        <h2 style="color: #1a5b79;">Ayo belajar coding, dan Buat Website Sendiri!</h2>
        <h3 style="color:#55acee ;">Belajar menjadi seorang web programming</h3><br>
        </div>
        <div class="lessons">
          

        <?php

        // Pengulangan isi judul dan gambar artikel yang ditampilkan 
        include_once('config.php');
        $query= mysqli_query($koneksi,"SELECT * FROM artikel ");
        while($row = mysqli_fetch_assoc($query)){				
          echo
          "<div class='lesson'>
            <a href='index.php?page=artikel.php&id=$row[id]'>
            <img src='img/$row[gambar]' width='280px' height='180px' >
            <h4 style='color:black; font-weight:normal; margin-top:10px;' >".$row['judul']."</h4></a>
          </div>";
        }

        ?>
            
          <div class="clear"></div>
        </div>
      </div>
    </div>

    


   

    