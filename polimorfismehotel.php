<?php
abstract class hotel{
    abstract public function pelanggan();
}

class tempat extends hotel{
   public function pelanggan(){
   return "Tempat Pelanggan Hotel";
   }
}
class kamar extends hotel{
    public function pelanggan(){
    return "Kamar Pelanggan Hotel";    
    }
}
$tempat_baru = new tempat();
$kamar_baru = new kamar();

function pelanggan_hotel($objek_hotel){
    return $objek_hotel->pelanggan(); 
}

echo pelanggan_hotel($tempat_baru);
echo "<br/>";
echo pelanggan_hotel($kamar_baru); 
echo "<br/>"; 
?>