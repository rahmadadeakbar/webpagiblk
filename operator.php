<?php 

   $nama="Rahmad Ade Akbar";
   $alamat="punge Blang cut";
   $nohp="082361001252";
//    echo($nama.$alamat);
// echo($nama);
$hasil=1;
if($hasil==1){
    echo($nama);
}else if($hasil==2){
    echo($alamat);
}else{
    echo($nohp);
}
?>

<?php
    $a=10;
    $b=20;

    function myTest(){
        global $a;
        global $b;
        echo ($a)+($b);
    }
    myTest();
?>


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
$hasil=100;

if($hasil==$kali){

    echo"Nilai anda adalah $kali";

}else if($hasil==$tambah){
    echo"nilai anda adalah $tambah";

}else if($hasil==$kurang){
    echo"nilai anda adalah $kurang";

}else if($hasil==$bagi){
    echo"nilai anda adalah $bagi";

}else{
    echo"nilai yang anda masukkan tidak ada";
}

?>
<br>
<br>

<!-- pembuatan nilai dan biodata mahasiswa -->
<?php
    $nim="00201092028";
    $nama="Rahmad Ade Akbar";
    $umur="23 Tahun";
    $nilai=80;
    $status="4";

    echo"NIM : $nim <br>";
    echo"Nama : $nama <br>";
    echo"Umur : $umur <br>";
    print"Umur : $umur <br>";
    print"Umur : ".$umur;print "<br>";
    printf("Nilai :%.2f <br>",$nilai);

    if($status=="1"){
        echo"Dia Adalah Mahasiswa Aktif";
    }else if($status=="2"){
        echo"Dia adalah Mahasiswa teladan";
    }else if($status=="3"){
        echo"Dia adalah alumni";
    }else{
        echo"dia sudah out";
    }
?>
<br>
<br>
<!-- membuat define variable dan nilai -->
<?php
    define("nama","Rahmad Ade Akbar");
    define("alamat","punge");
    define("umur","23 Tahun");
    define("no_hp","0"."82361001252");

    // output
    echo"Nama:".nama;
    echo"Alamat:".alamat;
    echo"Umur:".umur;
    echo"No_hp:".no_hp;
?>
<br>
<br>
<!-- menentukan nilai pajak -->

<?php
    $gaji=3000000;
    $pajak=0.025;
    $thp=$gaji-($gaji*$pajak);

    echo"Gaji yang diperoleh awal = $gaji";
    echo"Gaji yang dibawa pulang dan diberikan kepada istri = Rp. $thp";
?>
<br>
<br>
<!-- menentukan operator logika -->
<?php
    $a = 5; 
    $b = 4; 
     
    if($a == $b){
        echo"tidak mungkin";
    }else{
        echo"yang benar saja <br>";
    }

    if($a != $b){
        echo"ya anda benar <br>";
    }

    if($a> $b){
        echo"anda jenius <br>";
    }
    if($a< $b){
        echo"anda jenius <br>";
    }else{
        echo"yang benar saja  <br>";
    }

    if(($a != $b) && ($a > $b)){
        echo"anda luar biasa <br>";
    }
    
    if(($a != $b) || ($a < $b)){
        echo"anda jenius sekali <br>";
    }
    echo "$a == $b : ". ($a == $b);
    echo "<br>$a != $b : ". ($a != $b); 
    echo "<br>$a > $b : ". ($a > $b); 
    echo "<br>$a < $b : ". ($a < $b); 
    echo "<br>($a == $b) && ($a > $b) : ".(($a != $b) && ($a > $b)); 
    echo "<br>($a == $b) || ($a > $b) : ".(($a != $b) || ($a < $b));
?>

<br>
<br>

<!--  -->

<?php
    $hari="selasa";
    if($hari=="senin"){
        echo"upacara bendera";
    }else if($hari=="selasa"){
        echo"belajar";
    }else{
        echo"hari jadinya kamu";
    }
?>

