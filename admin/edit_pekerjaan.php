<?php 
    include'../koneksi/koneksi.php';
    include'header.php';
?>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-themecolor">Form Pekerjaan</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Form Pekerjaan</li>
                        </ol>
                    </div>
                    
                </div>
                <?php 

                    $id_pekerjaan=$_GET['id_pekerjaan'];

                    $queryupdate=mysqli_query($koneksi,"SELECT * FROM pekerjaan WHERE id_pekerjaan='$id_pekerjaan'")or die(mysqli_error($queryupdate));

                    $data=mysqli_fetch_assoc($queryupdate);

                ?>

                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-12 col-xlg-9 col-md-7">
                        <div class="card">
                            <!-- Tab panes -->
                            <div class="card-body">
                                <form class="form-horizontal form-material" action="../proses/proses_edit_pekerjaan.php" method="POST" enctype="multipart/form-data">
                                    <input type="hidden" name="id_pekerjaan" value="<?php echo $data['id_pekerjaan'];?>">
                                    <div class="form-group">
                                        <label class="col-md-12">Nama Pekerjaan</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="Masukkan Nama" class="form-control form-control-line" name="nama_pekerjaan" value="<?php echo $data['nama_pekerjaan'];?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="example-email" class="col-md-12">Perusahaan Bekerja</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="Masukkan Perusahaan" class="form-control form-control-line" id="example-email" name="perusahaan" value="<?php echo $data['nama_perusahaan'];?>"> 
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="example-email" class="col-md-12">Tahun Bekerja</label>
                                        <div class="col-md-12">
                                            <input type="number" placeholder="Masukkan Perusahaan" class="form-control form-control-line" id="example-email" name="tahun_bekerja" value="<?php echo $data['tahun'];?>"> 
                                        </div>
                                    </div>
                                    

                                    <div class="form-group">
                                        <label class="col-md-12">Alamat Kantor</label>
                                        <div class="col-md-12">
                                            <textarea rows="5" name="alamat" class="form-control form-control-line"><?php echo $data['alamat_perusahaan'];?></textarea>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="col-md-12">Nomor HP Perusahaan</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="masukkan No HP" class="form-control form-control-line" name="no_hp" value="<?php echo $data['no_hp_perusahaan'];?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Upload Gambar Perusahaan</label>
                                        <div class="col-md-12">
                                            <input type="file"  class="form-control form-control-line" name="foto">
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button type="submit" class="btn btn-success" name="update">Update</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- Row -->
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer">
                © 2018 Adminwrap by wrappixel.com
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
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
</body>

</html>