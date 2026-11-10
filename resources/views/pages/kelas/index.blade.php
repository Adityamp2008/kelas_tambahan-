<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Data</title>
</head>
<body>
    <h2>Data kelas</h2>
    <a href="/kelas/create">Tambah Data</a>
    <br>

    <table border="1" cellpading="8" cellspacing="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Kelas</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($kelas as $index => $item)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $item->nama_kelas }}</td>
                    <td>
                        <a href="/kelas/edit/{{ $item->id }}">Edit</a>
                        <a href="/kelas/delete/{{ $item->id }}" onclick="return confirm('Apakah anda yakin?')">Hapus</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3">Data kelas masih kosong</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>