<?php

include "connectdb.php";

$data = json_decode(file_get_contents("php://input"));

$kodeobat = $conn->real_escape_string($data->KODEOBAT);
$namaobat = $conn->real_escape_string($data->NAMAOBAT);
$hargabeli = $conn->real_escape_string($data->HARGABELI);
$hargajual = $conn->real_escape_string($data->HARGAJUAL);
$jumlah = $conn->real_escape_string($data->JUMLAH);
$btnName = $conn->real_escape_string($data->btnName);

if ($btnName == 'Simpan') {
    // proses input data
    $query = "INSERT INTO tb_obat VALUES ('$kodeobat', '$namaobat', '$hargabeli', '$hargajual', '$jumlah')";
    $conn->query($query);
} else { // proses update data
    $query = "UPDATE tb_obat SET nama_obat = '$namaobat', harga_beli = '$hargabeli',
     harga_jual = '$hargajual', jumlah = '$jumlah' WHERE kode_obat = '$kodeobat'";
    $conn->query($query);
}
