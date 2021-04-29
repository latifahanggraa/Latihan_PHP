<?php
$conn = mysqli_connect("localhost","root","","db_tokobuku");

if(!$conn)
{
    echo "Koneksi Gagal";
    die ();
}