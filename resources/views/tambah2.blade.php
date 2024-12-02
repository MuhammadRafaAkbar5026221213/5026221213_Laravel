@extends('template')

@section('tulisan1', 'Tambah Data Blu-ray')

@section('link1')
<a href="/blueray" class="btn btn-secondary">Kembali</a>
@endsection

@section('konten')
    <form action="/blueray/store" method="post">
        {{ csrf_field() }}
        
        <div class="row mb-3">
            <label for="kodeblueray" class="col-sm-2 col-form-label">Kode Blu-ray</label>
            <div class="col-sm-10">
                <input type="text" name="kodeblueray" class="form-control" id="kodeblueray" value="{{ $kodeblueray }}" readonly>
            </div>
        </div>
        
        <div class="row mb-3">
            <label for="merkblueray" class="col-sm-2 col-form-label">Merk Blu-ray</label>
            <div class="col-sm-10">
                <input type="text" name="merkblueray" class="form-control" id="merkblueray" required>
            </div>
        </div>
        
        <div class="row mb-3">
            <label for="stokblueray" class="col-sm-2 col-form-label">Stok Blu-ray</label>
            <div class="col-sm-10">
                <input type="number" name="stokblueray" class="form-control" id="stokblueray" required>
            </div>
        </div>
        
        <div class="row mb-3">
            <label for="tersedia" class="col-sm-2 col-form-label">Tersedia</label>
            <div class="col-sm-10">
                <select name="tersedia" class="form-control" id="tersedia" required>
                    <option value="y">Y</option>
                    <option value="n">N</option>
                </select>
            </div>
        </div>
        
        <div class="row mb-3">
            <div class="col-sm-12">
                <center><input type="submit" value="Simpan Data" class="btn btn-primary"></center>
            </div>
        </div>
    </form>
@endsection
