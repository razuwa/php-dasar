<?php
#array di php:
#bisa kosong
#bisa juga dari banyak tipe data

#cara buat array 1
$buatArray = array(1, 2, 3, 4);
var_dump($buatArray);

#bisa juga langsung
$tesArray = ["Joko", "wi", "do", "do", "pra"];
var_dump($tesArray);

#operasi dalam array

# $array[index] .Mengakses data di array pada nomor index
var_dump($tesArray[0]);

# $array[index] = value. Mengubah data di array pada nomor index dengan value baru
$tesArray[0] = "Choco";
var_dump($tesArray[0]);

# $array[] = value. Menambah data di array pada posisi paling belakang
$tesArray[] = "Bowo";
var_dump($tesArray[0]);

# unset($array[index]). Menghapus data di array, index otomatis hilang dari array
unset($tesArray[0]);
var_dump($tesArray[0]);

# count($array). Mengambil total data di array
var_dump(count($tesArray));

