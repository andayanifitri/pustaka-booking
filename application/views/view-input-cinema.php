<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cinema</title>
</head>
<body>
    <h1>Pemesanan Tiket Cinema 99</h1>
    <form action="<?= base_url('cinema/addCinema')?>"method="POST">
    Nama Pemesan    : <input type="text" name="nama" id=""><br>
    Judul film      : <select name="judul" id="">
                    <option value="">-- pilih --</option>
                    <option value="Parasite">Parasite</option>
                    <option value="Hereditary">Hereditary</option>
                    <option value="The Closet">The Closet</option>
                    <option value="Kamen Raider Reiwa">Kamen Raider Reiwa</option>
                    </select> <br>
    Pukul           : <input type="radio" name="pukul" value="14.20">14.20 <input type="radio" name="pukul" value="15.40">15.40 <input type="radio" name="pukul" value="16.40">16.40 <br>
    Tipe Studio     : <input type="radio" name="tipe" value="Reguler 2D"> Reguler 2D <input type="radio" name="tipe" value="3D"> 3D <input type="radio" name="tipe" value="velvet"> velvet <br>
    Jumlah Pesan    : <input type="text" name="jumlah" id=""> <br>
    <button type="submit">Hitung</button> <button type="reset">Batal</button>
    </form>
</body>
</html>