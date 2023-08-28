<?php
abstract class alamat_operator
{
    abstract public function set_operator($operator_txt);
    abstract public function get_operator();
}

class alamat_operator_baru extends alamat_operator
{
    public function set_operator($operator_txt)
    {
        $this->operator=$operator_txt;
    }
    public function get_operator()
    {
        return $this->operator;
    }
}


interface nomor_telepon 
{
    public function set_nomor($nomor_txt);
    public function get_nomor();
}


class penjualan_pulsa extends alamat_operator implements nomor_telepon 
{
    public $nomor;
    public $nama;
    public $operator;
    public $pembelian;
    public $tanggal;
    public $counter_alamat;

    public function __construct($counter_alamat)
    {
        echo "Terima Kasih Telah Berbelanja Di ";
        echo $this->counter_alamat=$counter_alamat;
    }
    
    function get_array()
    {
        $ulang=array("Selamat Pengisian Pulsa BERHASIL",
        "Silahkan Cek Saldo Pulsa Anda",
        "Terima Kasih");
        //Perulangan Foreach
        foreach($ulang as $looping)
        {
        echo "<li>$looping</li>";
        }
    }

    public function nominal_beli($nominal)
    {

        if ($nominal >= 75)
        {
            throw new Exception ("MENDAPAT BONUS PULSA 5K");
        }
        return true;
    }

    function get_harga_pembelian ($kode)
    {
        if($kode=="5k")
            {
                $this->harga="7000";
            }
        else if($kode=="10k")
            {
                $this->harga="12000";
            }
        else if($kode=="15k")
            {
                $this->harga="17000";
            }
        else if($kode=="20k")
            {
                $this->harga="22000";
            }
        else if($kode=="25k")
            {
                $this->harga="27000";
            }
        else if($kode=="50k")
            {
                $this->harga="52000";
            }
        else if($kode=="75k")
            {
                $this->harga="77000";
            }
        else if($kode=="100k")
            {
                $this->harga="102000";
            }
    }

    public function set_nomor($nomor_txt)
    {
        $this->nomor=$nomor_txt;
    }
    public function get_nomor()
    {
        return $this->nomor;
    }

    public function set_operator($operator_txt)
    {
        $this->operator=$operator_txt;
    }
    public function get_operator()
    {
        return $this->operator;
    }

    function set_pembelian($harga_txt)
    {
        $this->harga=$harga_txt;
    }
    function get_pembelian()
    {
        return $this->harga;
    }

    function set_tanggal($tanggal_txt)
    {
        $this->tanggal=$tanggal_txt;
    }
    function get_tanggal()
    {
        return $this->tanggal;
    }

    function set_nama($nama_txt)
    {
        $this->nama=$nama_txt;
    }
    function get_nama()
    {
        return $this->nama;
    }
}
?>



    <form method="POST" >
        <table>
            <b> SISTEM PENJUALAN PULSA ASUNA CELL SOLO</b>

            <tr>
                <td>Tanggal</td>
                <td>
                    <input type="date" name="tanggal" placeholder="Masukan Tanggal" required>    
                </td>
            </tr>

            <tr>    
                <td>Nama Pembeli</td>
                <td>
                    <input type="text" name="nama" placeholder="Nama Pembeli" required>
                </td>
            </tr>

            <tr>    
                <td>Nomor Telepon</td>
                <td>
                    <input type="number" name="nomor" placeholder="Nomor Telepon" required>
                </td>
            </tr>
            <tr>

                <td>Operator</td>
                <td><select name="operator" required>
                        <option value="TELKOMSEL">TELKOMSEL</option>
                        <option value="INDOSAT">INDOSAT</option>
                        <option value="TRI">3</option>
                        <option value="AXIS">AXIS</option>
                        <option value="XL">XL</option>
                        <option value="SMARTFREN">SMARTFREN</option>
                        <option value="By.U">By.U</option>
                    </select>
                </td>
            </tr>
            <tr><td>Pembelian</td>
                <td><select name="pembelian" required>
                    <option value="5k">5k</option>
                    <option value="10k">10k</option>
                    <option value="15k">15k</option>
                    <option value="20k">20k</option>
                    <option value="25k">25k</option>
                    <option value="50k">50k</option>
                    <option value="75k">75k</option>
                    <option value="100k">100k</option>
                </td>
            </tr>
        </table>
        <table>
            <tr>
                <button>Submit</login>
            </tr>
        </table>
    </form>



<?php
    $tanggal="";
    $nama="";
    $nomor=0;
    $operator="";
    $pembelian=0;
    $totbyr=0;
    $ulang="";

    if($_POST)
    {
        $tanggal=$_POST["tanggal"];
        $nama=$_POST["nama"];
        $nomor=$_POST["nomor"];
        $operator=$_POST["operator"];
        $pembelian=$_POST["pembelian"];
        
        // $notelp=new penjualan_pulsa("Asuna Cell Solo");
        function operator($objek_operator)
        {
            return $objek_operator->get_operator();
        }
        
        //Memanggil Tanggal Pembelian
        $pulsa = new penjualan_pulsa('Asuna Cell Solo');
        $pulsa->set_tanggal($tanggal);        
        echo "<br>";
        echo "Tanggal : ".$pulsa->get_tanggal();
        echo "<br>";
        
        //memanggil nama pembeli
        $pulsa->set_nama($nama);
        echo "Nama Pembeli : ".$pulsa->get_nama();
        echo "<br>";
        
        //memanggil nomor telepon
        $pulsa->set_nomor($nomor);
        echo "Nomor Telepon : ".$pulsa->get_nomor();
        echo "<br>";
        
        //Menentukan Operator Telepon Selular
        $pulsa->set_operator($operator);
        echo operator($pulsa);
        echo "Operator : ".$pulsa->get_operator();
        echo "<br>";

        //Menentukan Harga Pembelian Pulsa
        $pulsa->get_harga_pembelian($pembelian); 
        echo "Total Bayar : ".$pulsa->get_pembelian();
        echo "<br>";
        echo "<br>";

        try 
        {
            $pulsa->nominal_beli($_POST['pembelian']);
            echo 'BONUS YANG DIDAPAT : MAAF ANDA TIDAK MENDAPAT BONUS PULSA';
        }
        catch(exception $e)
        {
              echo 'BONUS YANG DIDAPAT : ' .$e->getmessage();
        }

        //Perulangan Foreach - Array Asosiatif
        echo "<h5>NB:</h5>";
        $ulang=$pulsa->get_array();
            echo "<ul>";
            echo "</ul>";
    }

?>