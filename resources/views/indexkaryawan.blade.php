<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index Karyawan</title>
</head>
<body>
    <h1>Data Karyawan</h1>
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
            @foreach($karyawans as $karyawan)
            <tr>
                <td>{{ $karyawan->NIP }}</td>
                <td>{{ $karyawan->Nama }}</td>
                <td>{{ $karyawan->Pangkat }}</td>
                <td style="text-align: right;">Rp {{ number_format($karyawan->Gaji, 0, ',', '.') }}</td>
                <td>
                    <a href="{{ route('karyawan.show', $karyawan->NIP) }}">View</a>
                    <a href="{{ route('karyawan.edit', $karyawan->NIP) }}">Edit</a>
                    <form action="{{ route('karyawan.destroy', $karyawan->NIP) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>