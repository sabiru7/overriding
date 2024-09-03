<?php
class Otomotif
    {
        public $nama , $harga;
        public function __construct($nama = "mobil", $harga = 0) {
        
            $this->nama = $nama;
            $this->harga = $harga;
        }
        public function diskon($diskon){
            $diskon = ($diskon / 100) + $this->harga;
            return $this->harga - $diskon;
        
        }
        public function infoBarang()
        {
            return " $this->nama,  $this->harga";
        }  
}
class car extends Otomotif{

}
class motor extends Otomotif{

}
$value = new car("calya", 100000000);
$value1= new motor("vario", 29000000);
echo $value->infoBarang();
echo "<br>";
echo $value1->infoBarang();
echo "# variabel-overriding"; 