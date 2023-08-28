<?php
interface hotel{
   public function detail_hotel();
}
interface room extends hotel{
    public function detail_room();
}
class pelanggan implements hotel,room{
    public function detail_hotel(){
        return "Detail Hotel<br>";
    }

    public function detail_room(){
        return "Detail Room";
    }
}

$pelangganhotel = new pelanggan();
echo $pelangganhotel->detail_hotel();
echo $pelangganhotel->detail_room();  
?>