<?php
include'header.php';
    include'koneksi/koneksi.php';
    $id=$_GET['id_mahasiswa'];

    $show=mysqli_query($koneksi,"SELECT * FROM mahasiswa WHERE id_mahasiswa='$id'") or die(mysqli_error($show));

    if(mysqli_num_rows($show)==0){
        echo'
                <script>window.history.back();</script>
        ';
    }else{
            $data=mysqli_fetch_array($show);
    }

?>

<!-- content -->
<div class="container">
        <form action="proses/proses_edit_mahasiswa.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $data['id_mahasiswa']?>" >

            <div class="form-group">
                <label for="nama_mahasiswa">Nama :</label>
                <input type="text" name="nama_mhs" class="form-control" id="nama_mahasiswa" placeholder="Example input placeholder" value="<?php echo $data['nama']?>">
            </div>
            <div class="form-group">
                <label for="nim_mahasiswa">NIM :</label>
                <input type="text" name="nim" class="form-control" id="nim_mahasiswa" placeholder="Another input placeholder"value="<?php echo $data['nim']?>">
            </div>
            <div class="form-group">
                <label for="jurusan_mhs">Jurusan :</label>
                <input type="text" name="jur" class="form-control" id="jurusan_mhs" placeholder="Another input placeholder" value="<?php echo $data['jurusan']?>">
            </div>
            <div class="form-group">
                <label for="jurusan_mhs">Matakuliah :</label>
                <input type="text" name="matakuliah" class="form-control" id="jurusan_mhs" placeholder="Another input placeholder" value="<?php echo $data['mata_kuliah']?>">
            </div>
            <div class="form-group">
                <label for="n_harian">Nilai Harian :</label>
                <input type="text" name="harian" class="form-control" id="n_harian" placeholder="Another input placeholder" value="<?php echo $data['nilai_harian']?>">
            </div>
            <div class="form-group">
                <label for="n_quiz">Nilai Quiz :</label>
                <input type="text" name="quiz" class="form-control" id="n_quiz" placeholder="Another input placeholder" value="<?php echo $data['nilai_quiz']?>">
            </div>
            <div class="form-group">
                <label for="n_uts">Nilai UTS :</label>
                <input type="text" name="uts" class="form-control" id="n_uts" placeholder="Another input placeholder" value="<?php echo $data['nilai_uts']?>">
            </div>
            <div class="form-group">
                <label for="n_uas">Nilai UAS :</label>
                <input type="text" name="uas" class="form-control" id="n_uas" placeholder="Another input placeholder" value="<?php echo $data['nilai_uas']?>">
            </div>

            <input type="submit" name="update" class="btn btn-success" value="Update">
            <br>
            <br>
            <br>
        </form>
 </div>

 <?php
 include'footer.php';
 ?>