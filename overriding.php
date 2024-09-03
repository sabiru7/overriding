<?php
class AlatTulis {
    public $nama, $harga;
    public function __construct($nama = "Buku", $harga = 0) {
        $this->nama = $nama;
        $this->harga = $harga;
    }

    public function diskon($diskon) {
        $diskon = ($diskon / 100) * $this->harga;
        return $this->harga - $diskon;
    }

    public function infoBarang() {
        return "Nama Barang $this->nama, dan Harga $this->harga";
    }
    }

    class Buku extends AlatTulis {
        public $jmlHalaman;
        public function __construct($nama = "Buku", $harga = 0, $jmlHalaman = 0) {
            $this->jmlHalaman = $jmlHalaman;
            parent::__construct($nama, $harga);
        }
        public function infoBarang() {
        return parent::infoBarang() . " Jumlah Halaman $this->jmlHalaman";
    }
}
$value = new buku ("transformer the fallen", 10000, 100);
echo $value->infoBarang();
