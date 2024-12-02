@extends('template')

@section('tulisan1', 'Data Blu-ray')

@section('link1')
    <a href="/blueray/tambah" class="btn btn-primary">+ Tambah Blu-ray Baru</a>
    <a href="/pegawai" class="btn btn-secondary">Ke Halaman Pegawai</a>
@endsection

@section('konten')
    <div class="container my-4">
        <!-- Search Form -->
        <form action="/blueray/cari" method="GET" class="mb-4">
            <div class="row align-items-center">
                <label for="cari" class="col-sm-2 col-form-label">Cari Blu-ray:</label>
                <div class="col-sm-6">
                    <input type="text" name="cari" id="cari" class="form-control" 
                           placeholder="Cari Merk Blu-ray ..." aria-label="Cari Blu-ray" 
                           value="{{ request('cari') }}">
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
                    <th>Merk</th>
                    <th>Stok</th>
                    <th>Tersedia</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($blueray as $b)
                    <tr>
                        <td>{{ $b->merkblueray }}</td>
                        <td>{{ $b->stokblueray }}</td>
                        <td>{{ $b->tersedia == 'y' ? 'Y' : 'N' }}</td>
                        <td>
                            <a href="/blueray/edit/{{ $b->kodeblueray }}" class="btn btn-warning btn-sm">
                                <i class="fa-solid fa-pen-to-square"></i> Edit
                            </a>
                            <a href="/blueray/hapus/{{ $b->kodeblueray }}" class="btn btn-danger btn-sm"
                               onclick="return confirm('Apakah Anda yakin ingin menghapus Blu-ray ini?')">
                                <i class="fa-solid fa-trash"></i> Hapus
                            </a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center">Data Blu-ray Tidak Ditemukan</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <!-- Pagination Info -->
        @if($blueray->count())
            <div class="mt-3">
                <p>Halaman: {{ $blueray->currentPage() }}</p>
                <p>Jumlah Data: {{ $blueray->total() }}</p>
                <p>Data Per Halaman: {{ $blueray->perPage() }}</p>
            </div>
        @endif

        <!-- Pagination Links -->
        <div class="d-flex justify-content-center">
            {{ $blueray->links('pagination::bootstrap-5') }}
        </div>
    </div>
@endsection
