<?php 
    include'../koneksi/koneksi.php';
    include'header.php';

?>
       
        <div class="page-wrapper">
            <div class="container-fluid">
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-themecolor">Table Pekerjaan</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Table Pekerjaan</li>
                        </ol>
                    </div>
                    <div class="col-md-7 align-self-center">
                        <a href="https://wrappixel.com/templates/adminwrap/" class="btn waves-effect waves-light btn btn-info pull-right hidden-sm-down"> Upgrade to Pro</a>
                    </div>
                </div>
                
                <div class="row">
                    <!-- column -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Tabel Pekerjaan</h4>
                                <h6 class="card-subtitle">Add class <code>.table</code></h6>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Foto</th>
                                                <th>Nama</th>
                                                <th>Nama Pekerjaan</th>
                                                <th>Nama Perusahaan</th>
                                                <th>Tahun</th>
                                                <th>Alamat</th>
                                                <th>No HP</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>

                                        <?php
                                            $nampildata=mysqli_query($koneksi, "SELECT * FROM pekerjaan p LEFT JOIN biodata b on p.id_biodata=b.id_biodata")or die(mysqli_error($nampildata));

                                            if(mysqli_num_rows($nampildata)==0){
                                                echo'<tr>data kosong</tr>';
                                            }else{
                                                $no=1;
                                                while ($data=mysqli_fetch_assoc($nampildata)) {

                                        ?>
                                        <tbody>
                                            <tr>
                                                <td><?php echo $no;?></td>
                                                <td><?php echo"<img width='50px' src='../upload/pekerjaan/".$data['gambar']."'>";?></td>
                                                <td><?php echo $data['nama']?></td>
                                                <td><?php echo $data['nama_pekerjaan']?></td>
                                                <td><?php echo $data['nama_perusahaan']?></td>
                                                <td><?php echo $data['tahun']?></td>
                                                <td><?php echo $data['alamat_perusahaan']?></td>
                                                <td><?php echo $data['no_hp_perusahaan']?></td>
                                                <td>
                                                    <a href="edit_pekerjaan.php?id_pekerjaan=<?php echo $data['id_pekerjaan']?>" type="submit" class="btn btn-info">Edit </a>
                                                    <a href="../proses/proses_hapus_pekerjaan.php?id_pekerjaan=<?php echo $data['id_pekerjaan']?>" type="submit" class="btn btn-danger" onclick='return confirm("Yakin ingin menghapus?")'>Hapus</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <?php 
                                            $no++;
                                                }
                                            }
                                        ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer">
                © 2018 Adminwrap by wrappixel.com
            </footer>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="assets/node_modules/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/node_modules/bootstrap/js/popper.min.js"></script>
    <script src="assets/node_modules/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="js/perfect-scrollbar.jquery.min.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.min.js"></script>
    <!-- jQuery peity -->
    <script src="assets/node_modules/peity/jquery.peity.min.js"></script>
    <script src="assets/node_modules/peity/jquery.peity.init.js"></script>
</body>

</html>