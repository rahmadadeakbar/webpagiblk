<?php
    include'header.php';
?>
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