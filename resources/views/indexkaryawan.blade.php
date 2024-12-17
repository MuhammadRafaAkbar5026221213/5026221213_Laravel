<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Karyawan</title>
</head>
<body>
    <h1>Daftar Karyawan</h1>
    <table border="1">
        <thead>
            <tr>
                <th>NIP</th>
                <th>Nama</th>
                <th>Pangkat</th>
                <th>Gaji</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($karyawans as $karyawan)
                <tr>
                    <td>{{ $karyawan->NIP }}</td>
                    <td>{{ $karyawan->Nama }}</td>
                    <td>{{ $karyawan->Pangkat }}</td>
                    <td align="right">Rp. {{ number_format($karyawan->Gaji, 0, ',', '.') }}</td>
                    <td>
                        <a href="{{ route('karyawan.edit', $karyawan->NIP) }}">Edit</a> |
                        <a href="{{ route('karyawan.show', $karyawan->NIP) }}">View</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
