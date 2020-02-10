<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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


</body>
</html>