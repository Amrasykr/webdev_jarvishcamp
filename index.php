<?php
class Kendaraan {
    public $merk;
    public $warna;

    public function __construct($merk, $warna) {
        $this->merk = $merk;
        $this->warna = $warna;
    }

    public function tampilkanInfo() {
        echo "Merk: $this->merk, Warna: $this->warna";
    }
}


class Mobil extends Kendaraan {
    public $jenisBahanBakar;

    public function __construct($merk, $warna, $jenisBahanBakar) {
        parent::__construct($merk, $warna);
        $this->jenisBahanBakar = $jenisBahanBakar;
    }

    public function tampilkanInfoLengkap() {
        echo "Merk: $this->merk, Warna: $this->warna, Jenis Bahan Bakar: $this->jenisBahanBakar";
    }
}

$mobilSaya = new Mobil("Toyota", "Merah", "Bensin");

$mobilSaya->tampilkanInfoLengkap();
?>
