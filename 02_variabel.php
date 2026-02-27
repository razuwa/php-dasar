<?php
#Variabel di php bisa menyimpan banyak tipe data

$namaDepan = "Joko";
$namaBelakang = "Widodo";
$anak = 3;

echo $namaDepan . " " . $namaBelakang;
echo "\n";
echo $anak;
echo "\n";

#Menghapus variable menggunakan function unset($namaVariabel)
#tapi hati hati nanti karena ini menghapus variabelnya, bukan nilainya

#untuk mengecek apakah variabel ada nilainya bisa menggunankan function isset();
#hampir sama kaya isnull();
var_dump(isset($namaBelakang));