<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Catatan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body class= "p-5">
    <h2>Tambah Catatan Baru</h2>

    <form action="../actions/store.php" method="POST">
        <label for="judul">Judul:</label>
        <input class = "from-control" type="text" id="judul" name="judul" required><br><br>
        <label for="isi">Isi Catatan:</label><br>
        <textarea class = "from-control" id="isi" name="isi" rows="5" required></textarea><br><br>
        <button class = "btn btn-primary" type="submit">Simpan</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>