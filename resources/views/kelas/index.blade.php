<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Halaman Kelas</h1>
    <a href="{{ route('kelas.create') }}">Tambah Kelas</a>

    <ul>
        @foreach ($kelas as $k)
            <li>
                {{ $k->nama_kelas }}

                <a href="{{ route('kelas.edit', $k->id) }}">Edit</a>
                <form action="{{ route('kelas.destroy', $k->id) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Hapus</button>
                </form>
            </li>
        @endforeach
    </ul>

</body>
</html>