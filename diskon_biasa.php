<?php
    include'header.php';
?>
    <div class="container">
        <div class="row">
            <div class="col-6">
            <form action="" method="POST">
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama Barang</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama">
                    
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Harga Barang</label>
                    <input type="number" class="form-control" id="exampleInputPassword1" name="harga_brg">
                </div>
                
                <button type="submit" name="tambah" class="btn btn-primary">Submit</button>
            </form>
            </div>
            <div class="col-6">
            <?php
                if(isset($_POST['tambah'])){
                    $nama_brg=$_POST['nama'];
                    $harga=$_POST['harga_brg'];
                    $diskon=0.5;
                    if($harga>=400000){
                        echo"diskon yang diperoleh sebesar Rp. ",$diskon*$harga , "<br> Harga yang harus dibayar untuk $nama_brg adalah sebesar Rp. ",$harga-($harga*$diskon);

                    }
                }
            ?>
            </div>
        </div>

    </div>
   
    <br>
   


<?php
// include'footer.php';
?>