<?php
    $nim="1200101";
    $nama="Rahmad Ade Akbar";
    $jurusan="Pendiikan Teknologi Informasi";
    $nilai=65;

    if($nilai<=50){
        echo"Grade yang diperoleh oleh $nama dengan $nim dan $jurusan adalah E";
    }else if($nilai<=65){
        echo"Grade yang diperoleh oleh $nama dengan $nim dan $jurusan adalah D";
    }
    else if($nilai<=72){
        echo"Grade yang diperoleh oleh $nama dengan $nim dan $jurusan adalah C";
    }
    else if($nilai<=83){
        echo"Grade yang diperoleh oleh $nama dengan $nim dan $jurusan adalah B";
    }
    else if($nilai<=100 || $nilai>=100){
        echo"Grade yang diperoleh oleh $nama dengan $nim dan $jurusan adalah A";
    }else{
        echo" $nama dengan $nim dan $jurusan dinyatakan tidak lulus";
    }
?>