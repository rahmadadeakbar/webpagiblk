<?php
    include'header.php';
?>
    <!-- content -->
    <div class="container">
        <form action="proses/proses_nilai.php" method="POST">
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
    <?php
        include'koneksi/koneksi.php';

        

            $tampil_nilai=mysqli_query($koneksi,"SELECT * FROM mahasiswa ")or die(mysqli_error($tampil_nilai));

        

            while($data=mysqli_fetch_array($tampil_nilai)){
                if($data['hasil']<=50){
                    echo"
                        <div class='alert alert-danger' role='alert'>
                            Nama : ".$data['nama']." dengan Nim :".$data['nim']." dan Jurusan :".$data['jurusan']." memperoleh nilai sebesar ".$data['hasil']."  maka dia mendapat grade E 
                            <a href='edit_mahasiswa.php?id_mahasiswa=".$data['id_mahasiswa']."' type='submit' class='btn btn-info'>Edit</a>   
                        </div>
                    ";
                }elseif($data['hasil']<=65){
                    echo"
                        <div class='alert alert-warning' role='alert'>
                        Nama : ".$data['nama']." dengan Nim :".$data['nim']." dan Jurusan :".$data['jurusan']." memperoleh nilai sebesar ".$data['hasil']."  maka dia mendapat grade D

                        <a href='edit_mahasiswa.php?id_mahasiswa=".$data['id_mahasiswa']."' type='submit' class='btn btn-info'>Edit</a>  
                        </div>
                    ";
                }elseif($data['hasil']<=75){
                    echo"
                        <div class='alert alert-info' role='alert'>
                        Nama : ".$data['nama']." dengan Nim :".$data['nim']." dan Jurusan :".$data['jurusan']." memperoleh nilai sebesar ".$data['hasil']."  maka dia mendapat grade C

                        <a href='edit_mahasiswa.php?id_mahasiswa=".$data['id_mahasiswa']."' type='submit' class='btn btn-info'>Edit</a>  
                        </div>
                    ";
                }elseif($data['hasil']<=85){
                    echo"
                        <div class='alert alert-primary' role='alert'>
                        Nama : ".$data['nama']." dengan Nim :".$data['nim']." dan Jurusan :".$data['jurusan']." memperoleh nilai sebesar ".$data['hasil']."  maka dia mendapat grade B
                        <a href='edit_mahasiswa.php?id_mahasiswa=".$data['id_mahasiswa']."' type='submit' class='btn btn-info'>Edit</a>  
                        </div>
                    ";
                }elseif($data['hasil']<=100 || $data['hasil']>100){
                    echo"
                        <div class='alert alert-success' role='alert'>
                        Nama : ".$data['nama']." dengan Nim :".$data['nim']." dan Jurusan :".$data['jurusan']." memperoleh nilai sebesar ".$data['hasil']."  maka dia mendapat grade A
                        <a href='edit_mahasiswa.php?id_mahasiswa=".$data['id_mahasiswa']."' type='submit' class='btn btn-info'>Edit</a>  
                        </div>
                    ";
                }
            }


            

        

                

    ?>
    </div>

<?php
    include'footer.php';
?>