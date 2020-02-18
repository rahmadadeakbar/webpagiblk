<?php
    include'header.php';
?>
<?php
    $nilai= array(
        "nama_saya"=>"berkokok",
        "kambing"=>"makan sayur",
        "sapi"=>"mooo",
        "jae"=>"makan-makan"
    );

    // menampilkan nilai dengan foreach
    foreach($nilai as $contoh=>$kebiasaan){
        echo"$contoh = $kebiasaan<br>";
    }
?>
<?php
    include'footer.php';
?>