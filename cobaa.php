<?php
class penjualan_pulsa{
    var $nomor;
    var $operator;
    var $pembelian;
    var $tanggal;

    function get_harga_pembelian ($kode) {
        if($kode=="5k"){
            $this->harga="7000";
        }else if($kode=="10k"){
            $this->harga="12000";
        }else if($kode=="15k"){
            $this->harga="17000";
        }else if($kode=="20k"){
            $this->harga="22000";
        }else if($kode=="25k"){
            $this->harga="27000";
        }else if($kode=="50k"){
            $this->harga="52000";
        }else if($kode=="75k"){
            $this->harga="77000";
        }else if($kode=="100k"){
            $this->harga="102000";
        }
    }

    function get_operator_telepon ($kode1) {
        if($kode=="TSEL"){
            $this->operator="TELKOMSEL";
        }else if($kode1=="ISAT"){
            $this->operator="INDOSAT";
        }else if($kode1=="TRI"){
            $this->operator="TRI";
        }else if($kode1=="AXIS"){
            $this->operator="AXIS";
        }else if($kode1=="XL"){
            $this->operator="XL";
        }else if($kode1=="SMARTFREN"){
            $this->operator="SMARTFREN";
        }
    }
    function set_nomor($nomor_txt){
        $this->nomor=$nomor_txt;
    }
    function get_nomor(){
        return $this->nomor;
    }
    function set_operator($operator_txt){
        $this->operator=$operator_txt;
    }
    function get_operator(){
        return $this->operator;
    }
    function set_pembelian($harga_txt){
        $this->harga=$harga_txt;
    }
    function get_pembelian(){
        return $this->harga;
    }
    function set_tanggal($tanggal_txt){
        $this->tanggal=$tanggal_txt;
    }
    function get_tanggal(){
        return $this->tanggal;
    }
}
class nama_counter{
    var $counter;
    var $alamat;

    public function __construct($counter, $alamat){
        echo "Selamat Datang Di";
        $this->counter=$counter;
        $this->alamat=$alamat;
    }
    public function get_counter(){
        return "$this->counter";
    }
    function get_alamat(){
        return "$this->alamat";
    }
}

//Array
$layani=["Pulsa", "Paket Data", "Token Listrik"];

?>

    <form method="POST" >
        <table>
            <b> SISTEM PENJUALAN PULSA </b>
            <tr>
                <br>Melayani :
                <!-- looping -->
                <?php for($i=0; $i < 3; $i++){ ?>
                    <div> <?php echo $layani[$i]; ?></div>
                <?php } ?>
            </tr>
            <tr>
                <td>Tanggal</td>
                <td>
                    <input type="text" name="tanggal" placeholder="Masukan Tanggal" required>    
                </td>
            </tr>
            <tr>    
                <td>Nomor </td>
                <td>
                    <input type="number" name="nomor" placeholder="Nomor Telepon" required>
                </td>
            </tr>
            <tr>
                <td>Operator</td>
                <td><select name="operator" required>
                        <option value="TELKOMSEL">TELKOMSEL</option>
                        <option value="INDOSAT">INDOSAT</option>
                        <option value="TRI">TRI</option>
                        <option value="AXIS">AXIS</option>
                        <option value="XL">XL</option>
                        <option value="SMARTFREN">SMARTFREN</option>
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
            <!-- <tr>
                <td> Total </td>
                <td>
                    <input type="number" name="totbyr" placeholder="Jumlah" required>
                </td>
            </tr> -->
        </table>
        <table>
            <tr>
                <button>Submit</login>
            </tr>
        </table>
    </form>

<?php
    $tanggal="";
    $nomor=0;
    $operator="";
    $pembelian=0;
    $totbyr=0;
    
    if($_POST){
        $tanggal=$_POST["tanggal"];
        $nomor=$_POST["nomor"];
        $operator=$_POST["operator"];
        $pembelian=$_POST["pembelian"];
        // $totbyr=$_POST["totbyr"];

        $counter=new nama_counter (" Asuna Cell ", "Solo");
        echo $counter->get_counter();
        echo $counter->get_alamat();
        echo "<br />";
        $notelp=new penjualan_pulsa();
        //input nomor telepon
        //memanggil nomor
        $notelp->set_tanggal($tanggal);        
        echo "Tanggal : ".$notelp->get_tanggal();
        echo "<br>";
        //memanggil nomor telepon
        $notelp->set_nomor($nomor);
        echo "Nomor Telepon : ".$notelp->get_nomor();
        echo "<br>";
        //Menentukan Operator Telepon Selular
        $notelp->set_operator($operator);
        echo "Operator : ".$notelp->get_operator();
        echo "<br>";
        //Menentukan Harga Pembelian Pulsa
        $notelp->get_harga_pembelian($pembelian); 
        echo "Total Bayar : ".$notelp->get_pembelian();
        // echo "<br>";
        //Menentukan Harga
        // $notelp->get_total_bayar($totbyr);
    }

?>