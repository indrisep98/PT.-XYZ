<?php 
// mengaktifkan session pada php
session_start();
 
// menghubungkan php dengan koneksi database
include 'koneksi.php';
 
// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];
 
 
// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"select * from user where username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);
 
// cek apakah username dan password di temukan pada database
if($cek > 0){
 
    $data = mysqli_fetch_assoc($login);
 
    // cek jika user login sebagai admin
    if($data['level']=="Admin"){
 
        // buat session login dan username
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "Admin";
        // alihkan ke halaman dashboard admin
        header("location:Pengguna/index.php");
 
    // cek jika user login sebagai pengurus
    }else if($data['level']=="Manajer"){
        // buat session login dan username
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "Manajer";
        // alihkan ke halaman dashboard pengurus
        header("location:manajer/index.php");
 
    }else if($data['level']=="User"){
        // buat session login dan username
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "User";
        // alihkan ke halaman dashboard pengurus
        header("location:user/index.php");
 
    }else{
 
        // alihkan ke halaman login kembali
        echo "<script> alert('Maaf Anda Gagal Login'); </script>";
        echo "<script>location='login.php';</script>";
    }   
}else{
    echo "<script> alert('Maaf Password atau Username yang Anda Masukkan Salah!'); </script>";
        echo "<script>location='login.php';</script>";
}
 
?>