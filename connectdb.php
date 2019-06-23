<?php

define("HOSTNAME", "localhost");
define("USERNAME", "root");
define("PASSWORD", "");
define("DATABASE", "dbapotik");

$conn = new mysqli(HOSTNAME, USERNAME, PASSWORD, DATABASE) or
    die("Gagal Koneksi Database");
