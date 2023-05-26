<a href="index.php" class="btn btn-primary stretched-link">Kembali</a>
<h3> Data Barang </h3>

<table class="table" border="1">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Kode Barang</th>
      <th scope="col">Nama Barang</th>
      <th scope="col">Harga</th>
      <th colspan="2"> Aksi </th>
    </tr>
<?php    
    include "koneksi.php";
    $no=1;
    $ambildata = mysqli_query($koneksi, "select * from barang");
    while ($tampil = mysqli_fetch_array($ambildata)) {
        echo "
            <tr>
            <td>$no</td>
            <td>$tampil[kode_barang]</td>
            <td>$tampil[nama_barang]</td>
            <td>$tampil[harga_barang]</td>
            <td><a href='?kode=$tampil[kode_barang]'>Hapus</a></td>
            <td><a href='barang-ubah.php?kode=$tampil[kode_barang]'>Edit</a></td>
            </tr>";

            $no++;
    }
  ?>  
  </thead>
</table>


<?php
if (isset($_GET['kode'])) {
    mysqli_query($koneksi, "DELETE FROM barang WHERE kode_barang='$_GET[kode]'");

    echo "Data Telah Terhapus";
    echo "<meta http-equiv=refresh content=2;URL='barang-data.php'>";
}
?>