<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Bayi</title>
</head>
<body>
    <h1>Data Bayi</h1>

    <a href="{{ route('babies.create') }}">Tambah</a>
    <table border="1">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Nama Ibu</th>
                <th>Nama Ayah</th>
                <th>Tanggal Lahir</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($babies as $baby)
                <tr>
                    <td>{{ $baby->nama }}</td>
                    <td>{{ $baby->nama_ibu }}</td>
                    <td>{{ $baby->nama_ayah }}</td>
                    <td>{{ $baby->tanggal_lahir }}</td>
                    <td>
                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('babies.destroy', $baby->id) }}" method="POST">
                            <a href="{{ route('babies.show', $baby->id) }}">Detil</a>
                            <a href="{{ route('babies.edit', $baby->id) }}">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <h2>Data belum ada</h2>
            @endforelse
        </tbody>
    </table>
</body>
</html>