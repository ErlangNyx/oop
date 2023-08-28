<?php
abstract class pasien_pulang{
    abstract public function set_pulang($pulang_txt);
    abstract public function get_pulang();
}

class pasien_pulang_baru extends pasien_pulang
{
    public function set_pulang($pulang_txt)
    {
        $this->pulang=$pulang_txt;
    }
    public function get_pulang()
    {
        return $this->pulang;
    }
}


interface data_pasien 
{
    public function set_data($data_txt);
    public function get_data();
}


class rumah_sakit extends pasien_pulang implements data_pasien 
{
    public $namapasien;
    public $ruangkamarno;
    public $jeniskelamin;
    public $statuspulang;
    public $tanggalmasukRS;
    public $tanggalkeluarRS;

    public function set_data($data_txt){

    }
    public function get_data(){

    }
   public function set_pulang($pulang_txt){

    }
    public function get_pulang(){

    }
    public function __construct()
    {
        echo "Data Pemulangan Pasien <br>";

    }
    
    function get_array()
    {
        $layanan=array("Rumah Sakit Jujutsu Kaisen Surakarta Melayani :",
        "Rawat Jalan",
        "Rawat Inap");
        
        foreach($layanan as $looping)
        {
        echo "<li>$looping</li>";
        }
    }

    public function status_pasien($pasien){
        try {
        if (in_array($pasien)){
            throw new Exception ("Diperbolehkan Pulang");
        } else {
            echo "Rujuk <br><br>";
        }
    }

        catch(Exception $eror){
            return $eror->getMessage();
        }
    }

    function get_status_pulang ($proses) {
        if($proses=="Belum Sembuh"){
            $this->status="Rujuk";
        }else if($proses=="Sembuh"){
            $this->status="Dibolehkan Pulang";
        }
    }

    public function set_namapasien($namapasien_txt){
        $this->namapasien=$namapasien_txt;
    }
    public function get_namapasien(){
        return $this->namapasien;
    }
    public function set_ruangkamarno($ruangkamarno_txt){
        $this->ruangkamarno=$ruangkamarno_txt;
    }
    public function get_ruangkamarno(){
        return $this->ruangkamarno;
    }
    public function set_jeniskelamin($jeniskelamin_txt){
        $this->jeniskelamin=$jeniskelamin_txt;
    }
    public function get_jeniskelamin(){
        return $this->jeniskelamin;
    }
    public function set_statuspulang($statuspulang_txt){
        $this->status=$statuspulang_txt;
    }
    public function get_statuspulang(){
        return $this->status;
    }
    public function set_tanggalmasukRS($tanggalmasukRS_txt){
        $this->tanggalmasukRS=$tanggalmasukRS_txt;
    }
    public function get_tanggalmasukRS(){
        return $this->tanggalmasukRS;
    }
    public function set_tanggalkeluarRS($tanggalkeluarRS_txt){
        $this->tanggalkeluarRS=$tanggalkeluarRS_txt;
    }
    public function get_tanggalkeluarRS(){
        return $this->tanggalkeluarRS;
    }
}
?>


    <form method="POST" >
        <table>
            <b> SISTEM RAWAT INAP PASIEN</b>

            <tr>
                <td>Nama Pasien</td>
                <td>
                    <input type="text" name="NamaPasien" placeholder="Nama Pasien" required>    
                </td>
            </tr>

            <tr>    
                <td>Ruang Kamar No</td>
                <td>
                    <input type="text" name="RuangKamarNo" placeholder="Ruang Kamar No" required>
                </td>
            </tr>

            <tr>    
                <td>Jenis Kelamin</td>
                <td><select name="JenisKelamin" required>
                        <option value="LAKI-LAKI">LAKI-LAKI</option>
                        <option value="PEREMPUAN">PEREMPUAN</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Status Pulang</td>
                <td><select name="statuspulang" required>
                    <option value="Belum Sembuh">Belum Sembuh</option>
                    <option value="Sembuh">Sembuh</option>
                </select>
                </td>
            </tr>
            <td>Tanggal Masuk RS </td>
                <td><input type="date" name="TanggalMasukRS" placeholder="Tanggal Masuk RS" required></td>
            </tr>
            <tr>
                <td>Tanggal Keluar RS </td>
                <td><input type="date" name="TanggalKeluarRS" placeholder="Tanggal Keluar RS" required></td>
            </tr>
        </table>
        <table>
            <tr>
                <button>PRINT</login>
            </tr>
        </table>
    </form>



<?php
    $namapasien = "";
    $ruangkamarno = "";
    $jeniskelamin = "";
    $statuspulang = "";
    $tanggalmasukRS = "";
    $tanggalkeluarRS = "";    
    
    if ($_POST) {
    $namapasien = $_POST['NamaPasien'];
    $ruangkamarno = $_POST['RuangKamarNo'];
    $jeniskelamin = $_POST['JenisKelamin'];
    $statuspulang = $_POST['statuspulang'];
    $tanggalmasukRS = $_POST['TanggalMasukRS'];
    $tanggalkeluarRS = $_POST['TanggalKeluarRS'];
        
        function pulang($objek_pulang)
        {
            return $objek_pulang->get_pulang();
        }
        
        //$rumahsakit = new rumah_sakit;
        //echo $rumahsakit->get_rumahsakit();
        //echo $rumahsakit->get_alamat();
        echo "<br />";
        $pasien = new rumah_sakit();
        //input data pasien
        $pasien->set_namapasien($namapasien);
        $pasien->set_ruangkamarno($ruangkamarno);
        $pasien->set_jeniskelamin($jeniskelamin);
        $pasien->get_status_pulang($statuspulang);
        $pasien->set_tanggalmasukRS($tanggalmasukRS);
        $pasien->set_tanggalkeluarRS($tanggalkeluarRS);
        //memanggil data pasien 
        echo "Nama Pasien : " . $pasien->get_namapasien();
        echo "<br>";
        echo "Ruang Kamar No : " . $pasien->get_ruangkamarno();
        echo "<br>";
        echo "Jenis Kelamin : " . $pasien->get_jeniskelamin();
        echo "<br>";
        echo "Status Pulang : " . $pasien->get_statuspulang();
        echo "<br>";
        echo "Tanggal Masuk RS : " . $pasien->get_tanggalmasukRS();
        echo "<br>";
        echo "Tanggal Keluar RS : " . $pasien->get_tanggalkeluarRS();
        echo "<br>";    


        echo "<h5>KETERANGAN :</h5>";
        $layanan=$pasien->get_array();
            echo "<ul>";
            echo "</ul>";
    }
?>