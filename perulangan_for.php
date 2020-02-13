<?php
$nama="Rahmad Ade Akbar";
$i=2;
    for($i;$i<=10;$i++){
        echo"Hallo  $nama<br>";
    }
?>

<br>
<br>
<hr>
<?php
    $nilai=1;
    for($nilai; $nilai<=10; $nilai+=2){
        if($nilai%2==0){
            echo"$nilai adalah genap <br>";
        } else{
            echo"$nilai adalah ganjil <br>";
        }
        
    }
?>