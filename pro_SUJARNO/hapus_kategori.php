<?php
include_once 'koneksi.php';
//include('login.php');
$id = $_GET['id'];
$sql = "DELETE FROM kategori WHERE  id_kategori = '{$id}'"; 
$result = mysqli_query($conn, $sql);
header('location: kategori.php');
?>