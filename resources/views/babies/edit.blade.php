<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Data Bayi</title>
</head>
<body>
    <h1>Edit Data Bayi</h1>

    <form action="{{ route('babies.update', $baby->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-item">
            <label>Nama</label>
            <input type="text" name="nama" id="nama" value="{{ old('nama', $baby->nama) }}">
        </div>

        <div class="form-item">
            <label>Nama Ibu</label>
            <input type="text" name="nama_ibu" id="nama_ibu" value="{{ old('nama_ibu', $baby->nama_ibu) }}">
        </div>

        <div class="form-item">
            <label>Nama Ayah</label>
            <input type="text" name="nama_ayah" id="nama_ayah" value="{{ old('nama_ayah', $baby->nama_ayah) }}">
        </div>

        <div class="form-item">
            <label>Tanggal Lahir</label>
            <input type="date" name="tanggal_lahir" id="tanggal_lahir" value="{{ old('tanggal_lahir', $baby->tanggal_lahir) }}">
        </div>

        <button type="submit">Update</button>
        <button type="reset">Reset</button>
    </form>
</body>
</html>