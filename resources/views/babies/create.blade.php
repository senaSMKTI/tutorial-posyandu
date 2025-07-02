<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Bayi</title>
</head>
<body>
    <h1>Tambah Data Bayi</h1>
    <form action="{{ route('babies.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-item">
            <label>Nama Bayi</label>
            <input type="text" name="nama" id="nama">
        </div>
        <div class="form-item">
            <label>Nama Ibu</label>
            <input type="text" name="nama_ibu" id="nama_ibu">
        </div>
        <div class="form-item">
            <label>Nama Ayah</label>
            <input type="text" name="nama_ayah" id="nama_ayah">
        </div>
        <div class="form-item">
            <label>Tanggal Lahir</label>
            <input type="date" name="tanggal_lahir" id="tanggal_lahir">
        </div>
        <button type="submit">Tambah</button>
        <button type="reset">Reset</button>
    </form>
</body>
</html>