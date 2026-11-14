<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Kelas</title>
</head>

<body>
    <h2>edit kelas</h2>
    <a href="{{ route('kelas.index') }}">kembali</a>

    <form action="{{ route('kelas.update', $kelas->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="nama_kelas">nama kelas</label>
        <input
            type="text"
            name="nama_kelas"
            id="nama_kelas"
            value="{{ old('nama_kelas', $kelas->nama_kelas) }}">

        <button type="submit">update</button>
    </form>
</body>

</html>