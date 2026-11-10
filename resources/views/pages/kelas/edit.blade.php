<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Data</title>
</head>
<body>
    <h2>Edit Data Kelas</h2>
    <form action="/kelas/update/{{ $kelas->id }}" method="POST">
        @csrf
        <label>Nama Kelas: </label>
        <input type="text" name="nama_kelas" value="{{ $kelas->nama_kelas }}" required>
        <br>
        <button type="submit">Simpan</button>
        <a href="/kelas">Kembali</a>
    </form>
</body>
</html>