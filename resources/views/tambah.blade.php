

@extends('template')

@section('tulisan1','Data Pegawai')

@section('link1')
<a href="/pegawai"> Kembali</a>
@endsection

@section('konten')
	<form action="/pegawai/store" method="post">
		{{ csrf_field() }}
        <div class="row mb-3">
            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
              <input type="text" name="nama" class="form-control" id="nama" required="required">
            </div>
          </div>
        <div class="row mb-3">
            <label for="jabatan" class="col-sm-2 col-form-label">Jabatan</label>
            <div class="col-sm-10">
              <input type="text" name="jabatan" class="form-control" id="jabatan" required="required">
          </div>
          </div>
        <div class="row mb-3">
            <label for="umur" class="col-sm-2 col-form-label">Umur</label>
            <div class="col-sm-10">
              <input type="number" name="umur" class="form-control" id="umur" required="required">
            </div>
        </div>
        <div class="row mb-3">
            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-sm-10">
              <textarea name="alamat" class="form-control" id="alamat" required="required"></textarea>
        </div>
        </div>
        <div class="row mb-3">
            <div class="col-sm-12">
            <center><input type="submit" value="Simpan Data" class="btn btn-primary"></center>
        </div>
    </div>
	</form>
    @endsection