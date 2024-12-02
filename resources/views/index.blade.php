@extends('template')

@section('tulisan1', 'Data Pegawai')

@section('link1')
    <a href="/pegawai/tambah" class="btn btn-primary">
        + Tambah Pegawai Baru
    </a>
    <a href="/blueray" class="btn btn-secondary">
        Ke Halaman Blueray
    </a>
@endsection

@section('konten')

    <div class="container my-4">
        <!-- Search Form -->
        <form action="/pegawai/cari" method="GET" class="mb-4">
            <div class="row align-items-center">
                <label for="cari" class="col-sm-2 col-form-label">Cari Nama Pegawai:</label>
                <div class="col-sm-6">
                    <input type="text" name="cari" id="cari" class="form-control" 
                           placeholder="Cari Pegawai ..." value="{{ old('cari') }}">
                </div>
                <div class="col-sm-4">
                    <button type="submit" class="btn btn-success">CARI</button>
                </div>
            </div>
        </form>

        <!-- Data Table -->
        <table class="table table-striped table-hover">
            <thead class="table-primary">
                <tr>
                    <th>Nama</th>
                    <th>Jabatan</th>
                    <th>Umur</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pegawai as $p)
                    <tr>
                        <td>{{ $p->pegawai_nama }}</td>
                        <td>{{ $p->pegawai_jabatan }}</td>
                        <td>{{ $p->pegawai_umur }}</td>
                        <td>{{ $p->pegawai_alamat }}</td>
                        <td>
                            <a href="/pegawai/edit/{{ $p->pegawai_id }}" class="btn btn-warning btn-sm">
                                <i class="fa-solid fa-pen-to-square"></i> Edit
                            </a>
                            <a href="/pegawai/hapus/{{ $p->pegawai_id }}" class="btn btn-danger btn-sm">
                                <i class="fa-solid fa-trash"></i> Hapus
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Pagination Info -->
        <div class="mt-3">
            <p>Halaman: {{ $pegawai->currentPage() }}</p>
            <p>Jumlah Data: {{ $pegawai->total() }}</p>
            <p>Data Per Halaman: {{ $pegawai->perPage() }}</p>
        </div>

        <!-- Pagination Links -->
        <div class="d-flex justify-content-center">
            {{ $pegawai->links('pagination::bootstrap-5') }}
        </div>
    </div>

@endsection
