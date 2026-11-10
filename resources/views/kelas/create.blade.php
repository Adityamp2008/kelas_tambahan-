<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>tambah kelas</h2>
    <a href="{{ route('kelas.index') }}">kembali</a>

    <form action="/kelas/store" method="POST">
        @csrf
        <label for="nama_kelas">nama kelas</label>
        <input type="text" name="nama_kelas" id="nama_kelas">
        <button type="submit">simpan</button>
    </form>
</body>

</html>