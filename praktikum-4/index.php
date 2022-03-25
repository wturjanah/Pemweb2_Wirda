<?php
// membuat class kucing 
class kucing {
    // atribut 
    // visibility : public, private, etc
    public $nama;
    public $umur;
    public $warna;


    // behavior / method
    public function makan($nama){
        return "$nama sedang makan";
    }

    public function tidur($nama){
        return "$nama sedang tidur";
    }

    public function lari($nama){
        return "$nama sedang lari";
    }
}

// membuat objek / instance objek kucing
$garfield =new kucing();
$bolang = new kucing();

echo $garfield->makan("garfield"), "<br>";
echo $garfield->tidur("garfield"), "<br>";
echo $garfield->lari("garfield"), "<br>";

echo $bolang->makan("bolang"), "<br>";
echo $bolang->tidur("bolang"), "<br>";
echo $bolang->lari("bolang"), "<br>";



?>