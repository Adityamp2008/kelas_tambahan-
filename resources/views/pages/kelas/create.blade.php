<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Siswa</title>
</head>
<body>
    <h2>Tambah Siswa</h2>
    <a href="/kelas">Kembali</a>

    <form action="/kelas/store" method="POST">
        @csrf
        <label>Nama Kelas:</label><br>
        <input type="text" name="nama_kelas" required>
        <button type="submit">Simpan</button>
    </form>

</body>
</html>