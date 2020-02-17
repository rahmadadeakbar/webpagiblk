<?php
    include'header.php';
?>
    <!-- content -->
    <div class="container">
        <form action="" method="POST">
            <div class="form-group">
                <label for="nama_mahasiswa">Nama :</label>
                <input type="text" name="nama" class="form-control" id="nama_mahasiswa" placeholder="Example input placeholder">
            </div>
            <div class="form-group">
                <label for="nim_mahasiswa">NIM :</label>
                <input type="text" name="nim" class="form-control" id="nim_mahasiswa" placeholder="Another input placeholder">
            </div>
            <div class="form-group">
                <label for="jurusan_mhs">Jurusan :</label>
                <input type="text" name="jur" class="form-control" id="jurusan_mhs" placeholder="Another input placeholder">
            </div>
            <div class="form-group">
                <label for="n_harian">Nilai Harian :</label>
                <input type="text" name="harian" class="form-control" id="n_harian" placeholder="Another input placeholder">
            </div>
            <div class="form-group">
                <label for="n_quiz">Nilai Quiz :</label>
                <input type="text" name="quiz" class="form-control" id="n_quiz" placeholder="Another input placeholder">
            </div>
            <div class="form-group">
                <label for="n_uts">Nilai UTS :</label>
                <input type="text" name="uts" class="form-control" id="n_uts" placeholder="Another input placeholder">
            </div>
            <div class="form-group">
                <label for="n_uas">Nilai UAS :</label>
                <input type="text" name="uas" class="form-control" id="n_uas" placeholder="Another input placeholder">
            </div>

            <input type="submit" name="input" class="btn btn-info">
            <br>
            <br>
            <br>
        </form>
        <!-- hasilnya dibawah ini -->
        <?php
            if(isset($_POST['input'])){
                $nama_mhs=$_POST['nama'];
                $nim_mhs=$_POST['nim'];
                $jur_mhs=$_POST['jur'];
                $nilai_harian=$_POST['harian'];
                $nilai_quiz=$_POST['quiz'];
                $nilai_uts=$_POST['uts'];
                $nilai_uas=$_POST['uas'];
                $total=($nilai_harian*0.1)+($nilai_quiz*0.15)+($nilai_uts*0.35)+($nilai_uas*0.4);

                if($total<=50){
                    echo"
                        <div class='alert alert-danger' role='alert'>
                            Nama : $nama_mhs dengan Nim :$nim_mhs dan Jurusan :$jur_mhs memperoleh nilai sebesar $total  maka dia mendapat grade E
                        </div>
                    ";
                }elseif($total<=65){
                    echo"
                        <div class='alert alert-warning' role='alert'>
                            Nama : $nama_mhs dengan Nim :$nim_mhs dan Jurusan :$jur_mhs memperoleh nilai sebesar $total  maka dia mendapat grade D
                        </div>
                    ";
                }
            }
        ?>
    </div>

<?php
    include'footer.php';
?>