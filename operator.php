<!-- persentase diskon -->
<?php
    $sepatu=100000;
    $diskon=0.1;

    $harga_net=$sepatu-($sepatu*$diskon);
    echo"Harga yang harus dibayar = Rp.$harga_net";
?>

<br>
<!-- modulus -->
<?php
    $halaman=13;
    // percabangan
    if($halaman%2==0){
        echo"Halaman Genap";
    }else if($halaman%3==2){
        echo"Halaman utama";
    }else{
        echo"Halaman Ganjil";
    }
?>
<!-- operator -->
<?php

$a=10;
$b=5;
$c=7;
$d=8;

$kali=($a*$d);
$tambah=($a+$c);
$kurang=($b-$d);
$bagi=($a/$b);
$hasil=$kali;

if($hasil==80){

    echo"Nilai anda adalah $kali";

}else if($hasil==17){
    echo"nilai anda adalah $tambah";

}

?>