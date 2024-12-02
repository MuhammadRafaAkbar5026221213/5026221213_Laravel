@extends('template')

@section('tulisan1', 'Edit Blu-ray')

@section('link1')
<a href="/blueray" class="btn btn-secondary">Kembali</a>
@endsection

@section('konten')
    <form action="/blueray/update" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="kodeblueray" value="{{ $blueray->kodeblueray }}"> <br/>

        <div class="row mb-3">
            <label for="merkblueray" class="col-sm-2 col-form-label">Merk</label>
            <div class="col-sm-10">
                <input type="text" name="merkblueray" class="form-control" id="merkblueray" required="required" value="{{ $blueray->merkblueray }}">
            </div>
        </div>

        <div class="row mb-3">
            <label for="stokblueray" class="col-sm-2 col-form-label">Stok</label>
            <div class="col-sm-10">
                <input type="number" name="stokblueray" class="form-control" id="stokblueray" required="required" value="{{ $blueray->stokblueray }}">
            </div>
        </div>

        <div class="row mb-3">
            <label for="tersedia" class="col-sm-2 col-form-label">Tersedia</label>
            <div class="col-sm-10">
                <select name="tersedia" id="tersedia" class="form-control" required>
                    <option value="y" {{ $blueray->tersedia == 'y' ? 'selected' : '' }}>Y</option>
                    <option value="n" {{ $blueray->tersedia == 'n' ? 'selected' : '' }}>N</option>
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
