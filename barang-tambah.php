 
     <title>Input Barang</title>
  <h3> Tambah Barang </h3>
  <a href="index.php" class="btn btn-primary stretched-link">Kembali</a>
  <form action="" method="post">
  <table>
                      <tr>
                        <td width="120">Kode Barang</td>
                        <td><input type="text" name="kode_barang"></td>
                        </tr>
                    <tr>
                        <td>Nama Barang</td>
                        <td><input type="text" name="nama_barang"></td>
                     </tr>
                    <tr>
                        <td>Harga Barang</td>
                        <td><input type="text" name="harga_barang"></td>
                     </tr>
                     <tr>
                        <td></td>
                        <td><input type="submit" value="simpan" name="proses"></td>
                     </tr>
                    </form> 
                    </table>            
    <?php
        include "koneksi.php";

        if(isset($_POST['proses'])){
            mysqli_query($koneksi,"insert into barang set
            kode_barang = '$_POST[kode_barang]',
            nama_barang = '$_POST[nama_barang]',
            harga_barang = '$_POST[harga_barang]'");

            echo "Data Barang Telah Tersimpan";
        }
        ?>
