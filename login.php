<?php 
    include'header.php';
?>

    <form action="" method="POST">
        <input type="text" name="username">
        <input type="password" name="pass">
        <input type="submit" name="login" value="Login">
    </form>
    <?php
        if(isset($_POST['login'])){
            $username=$_POST['username'];
            $password=$_POST['pass'];

            if($username=='admin'&& $password=='admin123'){
                header('location: mahasiswa.php');
            }else if($username=='siswa'&& $password=='siswa123'){
                echo"<script>
                alert(window.location.href='diskon.php');
                </script>";
            }else{
                echo"Login Gagal";
            }
        }
    ?>

<?php
    include'footer.php';
?>