<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Karyawan</title>
</head>
<body>
    <h1>Edit Karyawan</h1>
    <form action="{{ route('karyawan.update', $karyawan->NIP) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="Nama">Nama:</label>
        <input type="text" name="Nama" value="{{ $karyawan->Nama }}" required><br>
        
        <label for="Pangkat">Pangkat:</label>
        <input type="text" name="Pangkat" value="{{ $karyawan->Pangkat }}" required><br>
        
        <label for="Gaji">Gaji:</label>
        <input type="number" name="Gaji" value="{{ $karyawan->Gaji }}" required><br>

        <button type="submit">Simpan Perubahan</button>
    </form>
</body>
</html>