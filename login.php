<?php
$username="siswa";
$password="siswa123";

if($username=="admin"&&$password=="admin123"){
    echo"lari ke halaman admin";
}else if($username=="siswa"&& $password=="siswa123"){
    echo"lari ke halaman siswa";
}else{
    echo"username dan password salah ";
}
?>