<?php 
    session_start();
    error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- css grid -->
    <link rel="stylesheet" href="assets/css/bootstrap-grid.css">
    <link rel="stylesheet" href="assets/css/bootstrap-grid.css.map">
    <link rel="stylesheet" href="assets/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-grid.min.css.map">
    <!-- close css grid -->
    <!-- css reboot -->
    <link rel="stylesheet" href="assets/css/bootstrap-reboot.css">
    <link rel="stylesheet" href="assets/css/bootstrap-reboot.css.map">
    <link rel="stylesheet" href="assets/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-reboot.min.css.map">
    <!-- close css reboot -->
    <!-- css bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css.map">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css.map">
    <link rel="stylesheet" href="assets/sweet/sweetalert.css">
</head>
<body>
    <!-- open navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-danger" style="background-color: #0d0b8c!important">
        <a class="navbar-brand" href="#">Rahmad Ade </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>

            <?php if($_SESSION['level']=="penjual"){?>

            <li class="nav-item">
                <a class="nav-link" href="diskon.php">Diskon</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="biodata.php">Biodata</a>
            </li>

            

            <?php } else if($_SESSION['level']=="pembeli") {?>

            <li class="nav-item">
                <a class="nav-link" href="mahasiswa.php">Mahasiswa</a>
            </li>


            <?php }?>
                
            <?php if($_SESSION['level']=="penjual"){?>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?php 

                    echo"selamat datang ".$_SESSION['username']=$data['username']."";

                ?>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="logout.php">logout</a>
                </div>
            </li>
            <?php }else{ ?>

                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Login
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="login.php">login</a>
                </div>
            </li>

            <?php } ?>

            
            </ul>
        </div>
    </nav>
    <!-- close navbar -->

    
