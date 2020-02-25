<?php
include'../koneksi/koneksi.php';

if(isset($_POST['regis'])){
    $id=md5(uniqid());
    $username=$_POST['username'];
    $password=md5($_POST['pass']);
    $email=$_POST['email'];
    $nama_lengkap=$_POST['nama_lengkap'];
    $level=$_POST['level'];


    $input_query= mysqli_query($koneksi,"INSERT into user  VALUES('$id','$username','$password','$nama_lengkap','$email','$level')") or die(mysqli_error($input_query));

    // die($input_query);
    if($input_query){
        echo"
            <script>alert('Data Berhasil di input dan silahkan login')
                window.location.href='../login.php'
            </script>

        ";
    }else{

    }


}
?>

