<?php 
    include'header.php';
?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker3.min.css">

<!-- form biodata -->
<br>
<br>
<div class="container">
    <form action="proses/proses_biodata.php" method="POST" enctype="multipart/form-data">
    <div class="form-group row">
        <label for="inputNama" class="col-sm-2 col-form-label">Nama</label>
        <div class="col-sm-10">
        <input type="text" name="nama"  class="form-control" id="inputNama">
        </div>
    </div>
    <div class="form-group row">
        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
        <input type="email" name="email" class="form-control" id="inputEmail">
        </div>
    </div>
    <div class="form-group row">
        <!-- Material checked -->
        <label for="inputPassword" class="col-sm-2 col-form-label">Jenis Kelamin</label>
        <div class="form-group col-md-4">
            <select id="inputState" name="jk" class="form-control">
                <option selected value="Laki-Laki">Laki-Laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>
    </div>

    <div class="form-group row">
        <label for="inputEmail" class="col-sm-2 col-form-label">Alamat</label>
        <div class="col-sm-10">
        <textarea name="alamat" id="" class="form-control" cols="30" rows="10"></textarea>
        </div>
    </div>

    <div class="form-group row">
        <label for="inputEmail" class="col-sm-2 col-form-label">Tanggal Lahir</label>
        <div class="col-sm-10">
        <input type="date" name="tanggal_lahir"ass="form-control" id="inputEmail">
        </div>
    </div>

    <div class="form-group row">
        <label for="inputEmail" class="col-sm-2 col-form-label">Tempat lahir</label>
        <div class="col-sm-10">
        <input type="text" name="tempat_lahir" class="form-control" id="inputEmail">
        </div>
    </div>

    <div class="form-group row">
        <label for="inputEmail" class="col-sm-2 col-form-label">No HP</label>
        <div class="col-sm-2">
        <input type="number" name="no_hp" class="form-control" id="inputEmail">
        </div>
    </div>
    <div class="form-group row">
        <label for="inputEmail" class="col-sm-2 ">Hobby</label>
        <div class="col-sm-4">
        <input type="checkbox" name="hobby"  id="inputEmail" value="Makan"> Makan
        <input type="checkbox" name="hobby" id="inputEmail" value="Jalan-Jalan"> Jalan-Jalan
        <input type="checkbox" name="hobby" id="inputEmail" value="Membaca"> Membaca
        <input type="checkbox" name="hobby" id="inputEmail" value="Ngoding"> Ngoding
        </div>
    </div>
    <div class="form-group row">
        <label for="inputEmail" class="col-sm-2 ">Upload File</label>
        <div class="btn btn-primary btn-sm float-left">
        <input class="file-path validate" name="foto" type="file">
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-10">
            <input type="submit" class="btn btn-primary" name="tambah" value="Input">
        </div>
    </div>
    </form>
</div>

<?php
    include'footer.php';
?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js">

$(function () {
                $('#datetimepicker1').datetimepicker();
            });
    
</script>
