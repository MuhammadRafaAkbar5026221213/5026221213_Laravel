<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Karyawan</title>
</head>
<body>
    <h1>Detail Karyawan</h1>
    <table border="1">
        <tr>
            <td>NIP</td>
            <td>{{ $karyawan->NIP }}</td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>{{ $karyawan->Nama }}</td>
        </tr>
        <tr>
            <td>Pangkat</td>
            <td>{{ $karyawan->Pangkat }}</td>
        </tr>
        <tr>
            <td>Gaji</td>
            <td>Rp {{ number_format($karyawan->Gaji, 0, ',', '.') }}</td>
        </tr>
    </table>
    <a href="{{ route('karyawan.index') }}">Kembali ke Daftar Karyawan</a>
</body>
</html>