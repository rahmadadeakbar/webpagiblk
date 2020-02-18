<?php
    include'header.php';
?>
<form action="" method="POST">
    <input type="text" name="mangga">
    <input type="submit" name="tambah" value="Tampil">

</form>

<?php
    if(isset($_POST['tambah'])){
        $buah=$_POST['mangga'];

        $warna= [
           "merah",
           "ungu",
           "kuning" 
        ];
        if($buah==$warna[0]){
            echo"<h1 style='color:red;'> $warna[0]</h1>";
        }else if($buah==$warna[1]){
            echo"<h1 style='color:purple;'> $warna[1]</h1>";
        }else if($buah==$warna[2]){
            echo"<h1 style='color:yellow;'> $warna[2]</h1>";
        }
        else{
            echo"warna tidak terdetect";
        }       
    }
?>

<!-- contoh array -->
<?php
    // metode pertama
      $buah= array("mangga","kelapa","jambu","apel");
      echo"<br>$buah[2]";
    //   metode ke 2
    $buahaja=[
            "mangga",
            "kelapa",
            "jambu",
            "apel"
    ];
    echo"<br>$buahaja[2]";

    // metode ketiga
    $buah3= array();
    $buah3[]="mangga";
    $buah3[]="kelapa";
    $buah3[]="jambu";
    $buah3[]="apel";

    echo"<br>$buah3[0]";


?>
  

<?php
    include'footer.php';
?>