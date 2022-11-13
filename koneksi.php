<?php

$server     = 'localhost';
$username   = 'root';
$password   = '';
$db         = 'v-angkringan';

$koneksi    = mysqli_connect($server, $username, $password, $db);
//pastikan urutan pemanggilan variabelnya sama

if(mysqli_connect_errno()){
    echo 'koneksi gagal : '.mysqli_connect_error();
}