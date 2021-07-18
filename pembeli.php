<h1>Tabel Pembeli</h1><h1./>
<table border='1'>

 <tr>
      <th>ID PEMBELI</th>
      
    </tr>

  <?php 
      include "koneksi.php";
      $no = 1;
      $ambildata = mysqli_query ($conn,"SELECT *FROM pembeli");
      while ($tampil = mysqli_fetch_array($ambildata)){

        ?>

        <tr>
          <td> <?php echo $tampil['id_pembeli']; ?> </td>
        </tr>

      <?php 
      }
      ?>

 </table>
 
</body>

<?php
include 'barang.php';

include 'transaksi.php';


?>
