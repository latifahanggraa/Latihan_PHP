<?php 
     include_once ("koneksi.php");

     $id = $_GET['id'];

     $query = "DELETE from tb_buku WHERE id_buku=$id";

     $hasil = mysqli_query($conn,$query);

     if($hasil){
         header('Location:index.php');
     }else{
         echo "Hapus Data Gagal!";
     }

?>