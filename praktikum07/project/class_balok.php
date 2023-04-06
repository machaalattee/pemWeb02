<?php
class Balok
{
        public $panjang;
        public $lebar;
        public $tinggi;
    
        public function __construct($panjang, $lebar, $tinggi) {
            $this->panjang = $panjang;
            $this->lebar = $lebar;
            $this->tinggi = $tinggi;
        }
    
        public function hitungVolume() {
            return $this->panjang * $this->lebar * $this->tinggi;
        }
    
        public function hitungLuasSisi() {
            return 2 * ($this->panjang * $this->lebar + $this->panjang * $this->tinggi + $this->lebar * $this->tinggi);
        }
}

$balok = new Balok(6, 7, 8);
echo "Volume balok: " . $balok->hitungVolume() . "<br>";
echo "Luas sisi balok: " . $balok->hitungLuasSisi() . "<br>";