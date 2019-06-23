<?php

include "connectdb.php";

$postdata = file_get_contents("php://input");
$request = json_decode($postdata);
@$kode = $request->KODEOBAT;

$query = "DELETE FROM tb_obat WHERE kode_obat = '$kode'";
$conn->query($query);
