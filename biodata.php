<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="proses/proses_biodata.php" method="POST">
        <label > Nama :</label>
        <input type="text" name="nama" placeholder="Masukkan Nama">
        <label > Email :</label>
        <input type="email" name="email" placeholder="email@email">
        <label > jenis Kelamin :</label>
        <input type="radio" name="jk" value="Laki-Laki">Laki-Laki
        <input type="radio" name="jk" value="Perempuan">Perempuan
        <label >Alamat :</label>
        <textarea name="alamat" ></textarea>
        <label>Tanggal :</label>
        <input type="date" name="tanggal" >
        <label >Tempat Lahir:</label>
        <input type="text" name="tempat_lahir">
        <label >NO HP</label>
        <input type="number" name="no_hp">
        <label >Hobby :</label>
        <input type="checkbox" name="hobby1" value="gombal">Gombal
        <input type="checkbox" name="hobby2" value="mager">Mager
        <input type="checkbox" name="hobby3" value="makan">Makan
        
        <input type="submit" name="tambah" value="Input">
    </form>

</body>
</html>