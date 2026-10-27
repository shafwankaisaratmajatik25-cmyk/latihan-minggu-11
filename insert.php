<?php
// File json yang akan dibaca
$file = "anggota.json";

// Mendapatkan file json
$anggota = file_get_contents($file);

// Mendecode anggota.json
$data = json_decode($anggota, true);

// Data array baru (Data ke-3)
$data [] = array(
    'no'      => 3,
    'nama'    => 'jojo',
    'alamat'  => 'pinggir jalan'
);

// Mengencode data menjadi json
$jsonfile = json_encode($data, JSON_PRETTY_PRINT);

// Menyimpan data ke dalam anggota.json
file_put_contents($file, $jsonfile);
?>