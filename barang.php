<h1>Tabel Barang</h1><h1./>
<table border='1'>

 <tr>
      <th>ID KODEBARANG</th>
      <th>NAMA BARANG</th>
      <th>HARGA BARANG</th>
      
    </tr>

  <?php 
      include "koneksi.php";
      $no = 1;
      $ambildata = mysqli_query ($conn,"SELECT *FROM barang");
      while ($tampil = mysqli_fetch_array($ambildata)){

        ?>

        <tr>
          <td> <?php echo $tampil['id_kodebarang']; ?> </td>
          <td> <?php echo $tampil['nama_barang']; ?> </td> 
          <td> <?php echo $tampil['harga_barang']; ?> </td>
        </tr>

      <?php 
      }
      ?>

 </table>

</body>
