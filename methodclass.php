<?php
// buat abstract class
abstract class penilaian{
   // buat abstract method
  public $nim;
  public $nilai;
  public $grade;
  abstract public function get_nilai($nim,$nilai);

}
class mahasiswa extends penilaian{
    public $NIM;
    public function get_nilai($nim,$nilai){
        echo 
    }
}
$a=new kasir();
echo $a->penjualan("erlang","300000","2");

?>