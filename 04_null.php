<?php
#di php null juga bisa untuk mengubah nilai variabel menjadi null
$abc = null;
$nama = "prabo";
$nama = null;

#cek apakah null menggunakan function is_null()
$cekNull = is_null($nama);
var_dump($cekNull);