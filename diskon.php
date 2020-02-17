<?php
    include'header.php';
?>
    <!-- content -->
    <div class="container">
        <div class="row">
            <div class="col-6">
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="nama_barang">Nama Barang :</label>
                        <input type="text" name="nama_brg" class="form-control" id="nama_barang">
                    </div>
                    <div class="form-group">
                        <label for="harga_barang">Harga Barang :</label>
                        <input type="number" name="harga" class="form-control" id="harga_barang">
                    </div>
                    <input type="submit" name="bayar" class="btn btn-success" value="Bayar">
                    <br>
                    <br>
                </form>
            </div>
            <div class="col-6">
                <?php
                    if(isset($_POST['bayar'])){
                        $nama_barang=$_POST['nama_brg'];
                        $harga_barang=$_POST['harga'];
                        $diskon=20/100;
                        if($harga_barang>=400000){
                            echo"
                                <div class='alert alert-primary' role='alert'>
                                harga diskon yang diperoleh sebesar Rp.
                            ", $harga_barang*$diskon ;
                            echo"dan Harga $nama_barang yang harus dibayar sebesar Rp.",$harga_barang-($harga_barang*$diskon);
                            echo" </div>";
                        }
                    }
                ?>
            </div>
        </div>
    </div>
<?php
    include'footer.php'
?>