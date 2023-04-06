<?php
class Mamalia 
{
    // properti class mamalia
    public $namaHewan;
    public $warna;
    public $habitat;
    public $makanan;

    function bisaMenyusui()
    {
        return "$this->namaHewan ini bisa menyusui !";
    }
    function berjalan()
    {
        return "$this->namaHewan ini bisa berjalan !";
    }
}
$object = new Mamalia;
$object->namaHewan = "Monyet";
$object->warna = "Coklat";
$object->habitat = "Hutan";
$object->makanan = "Pisang/buah-buahan";
echo $object->bisaMenyusui();