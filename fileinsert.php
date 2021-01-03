<form action="" method="POST">
    <table align="center" border="0">
      <tbody>
        <tr>
          <td>ID Bengkel</td>
          <td><input type="text" name="IDBengkel" value="" placeholder="Masukan ID Bengkel" required>
          </td>
          <tr>
            <td>Nama Bengkel</td>
            <td><input type="text" name="NamaBengkel" value="" placeholder="Masukan Nama Bengkel" required>
            </td>
          </tr>
          <tr>
            <td>Nama Pemilik</td>
            <td><input type="text" name="NamaPemilik" value="" placeholder="Masukan Nama Pemilik" required>
            </td>
          </tr>
          <tr>
            <td>Nama Pimpinan</td>
            <td><input type="text" name="NamaPimpinan" value="" placeholder="Masukan Nama Pimpinan" required>
            </td>
          </tr>
          <tr>
            <td>Alamat Bengkel</td>
            <td>
              <textarea name="AlamatBengkel" placeholder="Masukan Alamat Bengkel" required></textarea>
            </td>
          </tr>
          <tr>
            <td colspan="2" align="center">
              <input type="reset" name="reset" value="Reset">
              <input type="submit" name="simpan" value="Simpan">
            </td>
          </tr>
        </tbody>
      </table>
    </form>
    <?php
    include("koneksi.php");
    if (isset($_POST['simpan'])) {

      $IDBengkel = $_POST['IDBengkel'];
      $NamaBengkel = $_POST['NamaBengkel'];
      $NamaPemilik = $_POST['NamaPemilik'];
      $NamaPimpinan = $_POST['NamaPimpinan'];
      $Alamat = $_POST['AlamatBengkel'];
      $simpan = $koneksi->query("INSERT INTO bengkel( IDBengkel, NamaBengkel, NamaPemilik, NamaPimpinan, Alamat) VALUES ('".$IDBengkel."',
      '".$NamaBengkel."','".$NamaPemilik."','".$NamaPimpinan."','".$Alamat."')");

      if ($simpan) {
        echo "<script>
              alert('Data Bengkel Berhasil Di Simpan !');
              window.location.href='tampilfiledata.php';</script>";
      }else {
        echo "<script>alert('Data Bengkel Gagal Di Simpan !');</script>";
      }
    }
     ?>
