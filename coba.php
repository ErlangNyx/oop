<?php
class data_peminjam
{
    public $nama;
    public $kelas;
    public $prodi;
    public $alamat;

    public function set_nama($nama_txt)
    {
        $this->nama = $nama_txt;
    }
    public function get_nama()
    {
        return $this->nama;
    }
    public function set_kelas($kelas_txt)
    {
        $this->kelas = $kelas_txt;
    }
    public function get_kelas()
    {
        return $this->kelas;
    }
    public function set_prodi($prodi_txt)
    {
        $this->prodi = $prodi_txt;
    }
    public function get_prodi()
    {
        return $this->prodi;
    }
    public function set_alamat($alamat_txt)
    {
        $this->alamat = $alamat_txt;
    }
    public function get_alamat()
    {
        return $this->alamat;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SISTEM PEMINJAMAN BUKU</title>
</head>

<body>
    <form method="POST">
        <b>SISTEM PEMINJAMAN BUKU</b>
        <table>
            <tr>
                <td>Nama Peminjam </td>
                <td><input type="text" name="nama" placeholder="Nama Peminjam" required></td>
            </tr>
            <tr>
                <td>Kelas </td>
                <td>
                    <select name="kelas" required>
                        <option selected value="">Pilih Kelas</option>
                        <option value="20A1">20A1</option>
                        <option value="20A2">20A2</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Prodi </td>
                <td>
                    <select name="prodi" required>
                        <option selected value="">Pilih Prodi</option>
                        <option value="Sistem Informasi">Sistem Informasi</option>
                        <option value="Teknik Komputer">Teknik Komputer</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Alamat </td>
                <td><input type="text" name="alamat" placeholder="Alamat Peminjam" required></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="cetak" value="CETAK"></td>
            </tr>
        </table>
    </form>

</body>

</html>

<?php error_reporting(E_ALL ^ E_NOTICE); ?>

<?php
$nama = "";
$kelas = "";
$prodi = "";
$alamat = "";
if ($_POST) {
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $prodi = $_POST['prodi'];
    $alamat = $_POST['alamat'];

    $peminjam = new data_peminjam();
    //input data peminjam
    $peminjam->set_nama($nama);
    $peminjam->set_kelas($kelas);
    $peminjam->set_prodi($prodi);
    $peminjam->set_alamat($alamat);
    //memanggil data peminjam 
    echo "Nama Peminjam : " . $peminjam->get_nama();
    echo "<br>";
    echo "Kelas Peminjam : " . $peminjam->get_kelas();
    echo "<br>";
    echo "Prodi Peminjam :" . $peminjam->get_prodi();
    echo "<br>";
    echo "Prodi Peminjam :" . $peminjam->get_alamat();
    echo "<br>";
}
?>