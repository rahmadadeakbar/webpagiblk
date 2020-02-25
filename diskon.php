<?php
    include'header.php';
?>
    <!-- content -->
    <div class="container">
        <div class="row">
            <div class="col-6">
                <form action="proses/proses_diskon.php" method="POST">
                    <div class="form-group">
                        <label for="nama_barang">Nama Barang :</label>
                        <input type="text" name="nama_barang" class="form-control" id="nama_barang">
                    </div>
                    <div class="form-group">
                        <label for="harga_barang">Harga Barang :</label>
                        <input type="number" name="harga" class="form-control" id="harga_barang">
                    </div>

                    <div class="form-group">
                        <label for="kategori">Kategori Barang :</label>
                        <input type="text" name="kategori" class="form-control" id="kategori">
                    </div>

                    <div class="form-group">
                        <label for="harga_barang">Stok Barang :</label>
                        <input type="number" name="stok" class="form-control" id="harga_barang">
                    </div> 
                    <input type="submit" name="bayar" class="btn btn-success" value="Bayar">
                    <br>
                    <br>
                </form>
            </div>
            <div class="col-6">
                <?php
                    include'koneksi/koneksi.php';

                    if(isset($_POST['bayar'])){
                        // $nama_barang=$_POST['nama_barang'];
                        // $harga_barang=$_POST['harga'];
                        // $kategori_barang=$_POST['kategori'];
                        // $stok_barang=$_POST['stok'];
                        $diskon=20/100;

                        $tampil_data=mysqli_query($koneksi,"SELECT * FROM stok")or die(mysqli_error($tampil_data));

                        $cek=mysqli_num_rows($tampil_data);
                        // menampilkan definisi data
                        while($data=mysqli_fetch_array($tampil_data)){
                            echo"
                                <div class='alert alert-primary' role='alert'>
                                harga diskon yang diperoleh sebesar Rp.
                            ", $data['harga']*$diskon ;
                            echo"dan Harga ".$data['nama_barang']." yang harus dibayar sebesar Rp.",$data['harga']-($data['harga']*$diskon);
                            echo" </div>";
                        
                        }
                        // die($data['harga']);
                        
                            
                    }
                ?>
            </div>
        </div>
    </div>
<?php
    include'footer.php'
?>