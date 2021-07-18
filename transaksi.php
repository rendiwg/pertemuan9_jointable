<h1>Tabel Transaksi</h1><h1./>
<table border='1'>

 <tr>
      <th>ID TRANSAKSI</th>
      <th>QUANTITY</th>
      <th>TANGGAL</th>
      <th>SUB TOTAL</th>
      <th>DISKON</th>
      <th>PPN</th>
      <th>GRAND TOTAL</th>
      <th>ID PEMBELI</th>
      <th>ID KODEBARANG</th>
      
    </tr>

  <?php 
      include "koneksi.php";
      $no = 1;
      $ambildata = mysqli_query ($conn,"SELECT *FROM transaksi");
      while ($tampil = mysqli_fetch_array($ambildata)){

        ?>

        <tr>
          <td> <?php echo $tampil['id_transaksi']; ?> </td>
          <td> <?php echo $tampil['quantity']; ?> </td> 
          <td> <?php echo $tampil['tanggal']; ?> </td>
          <td> <?php echo $tampil['sub_total']; ?> </td>
          <td> <?php echo $tampil['diskon']; ?> </td> 
          <td> <?php echo $tampil['ppn']; ?> </td>
          <td> <?php echo $tampil['grand_total']; ?> </td>
          <td> <?php echo $tampil['id_pembeli']; ?> </td> 
          <td> <?php echo $tampil['id_kodebarang']; ?> </td>
        </tr>

      <?php 
      }
      ?>

 </table>
 
</body>
