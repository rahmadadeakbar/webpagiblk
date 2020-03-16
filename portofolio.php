<?php
    include'koneksi/koneksi.php';
    include'header.php';
?>

<div class="container" style="padding: 100px">

<?php
    $show=mysqli_query($koneksi,"SELECT * FROM biodata WHERE persetujuan='ya'");

    while($data=mysqli_fetch_assoc($show)){

    
?>

    <div class="card" style="width: 18rem;">
    <img src="upload/<?php echo $data['foto']?>" class="card-img-top" alt="foto">
    <div class="card-body">
        <h5 class="card-title"><?php echo $data['nama']?></h5>
        <p class="card-text"><?php echo $data['alamat']?></p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
    </div>
    <?php } ?>

</div>