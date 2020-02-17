<?php
    // error_reporting(0);
        if(isset($_POST['tambah'])){
            $nama_saya=$_POST['nama'];
            $email_saya=$_POST['email'];
            $jenis_kelamin=$_POST['jk'];
            $alamat=$_POST['alamat'];
            $tanggal=$_POST['tanggal'];
            $tempat_lahir=$_POST['tempat_lahir'];
            $no_hp=$_POST['no_hp'];
            $hobby1=$_POST['hobby1'];
            $hobby2=$_POST['hobby2'];
            $hobby3=$_POST['hobby3'];
            echo"Nama Saya Adalah $nama_saya <br>";
            echo" Email Saya Adalah $email_saya <br>";
            echo"  Saya seorang $jenis_kelamin <br>";
            echo"  Alamat Saya di $alamat <br>";
            echo"  Saya Lahir pada tanggal $tanggal <br>";
            echo"  Tempat lahir saya di $tempat_lahir <br>";
            echo"  Hubungi saya di nomor $no_hp <br>";
            echo"  Hobby Saya $hobby1 <br>";
            echo"  Hobby Saya $hobby2 <br>";
            echo"  Hobby Saya $hobby3 <br>";
        }
    ?>