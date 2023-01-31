<?php

$db = mysqli_connect('localhost','root','','websppsiswa');
if(!$db){
    throw new Exception("Database gagal terkoneksi", 1);
}

?>