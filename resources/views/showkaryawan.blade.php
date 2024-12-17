<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Karyawan</title>
</head>
<body>
    <h1>Detail Karyawan</h1>
    <p><strong>NIP:</strong> {{ $karyawan->NIP }}</p>
    <p><strong>Nama:</strong> {{ $karyawan->Nama }}</p>
    <p><strong>Pangkat:</strong> {{ $karyawan->Pangkat }}</p>
    <p><strong>Gaji:</strong> Rp. {{ number_format($karyawan->Gaji, 0, ',', '.') }}</p>

    <a href="{{ route('karyawan.index') }}">Kembali ke Daftar Karyawan</a>
</body>
</html>
