<?php
class Shinobi
{
    public $nama, $asalDesa, $clan;

    public function __construct($n, $a, $c)
    {
        $this->nama = $n;
        $this->asalDesa = $a;
        $this->clan = $c;
    }
    public function berlari()
    {
        return "$this->nama bisa berlari";
    }
    public function getShinobi()
    {
        echo "Nama : $this->nama <br>
              Asal Desa : $this->asalDesa <br>
              Clan : $this->clan";
    }
}
$objectShinobi = new Shinobi("Kagami Uchina", "Konoha", "Uchiha");
$objectShinobi->getShinobi();