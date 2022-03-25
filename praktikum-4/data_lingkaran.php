<?php
require_once "class_lingkaran.php"
echo "NILAI PHI ". Lingkaran::PHI;
$lingkar1 = new Lingkaran(10);
$lingkar2 = new Lingkaran(4);

echo "<br/>Luas Lingkaran 1 ".$lingkaran1->getLuas();
echo "<br/>Luas Lingkaran 2 ".$lingkaran2->getLuas();

echo "Keliling Lingkaran 1 ".$lingkar1->getKeliling();
echo "Keliling Lingkaran 2 ".$lingkar2->getKeliling();

?>