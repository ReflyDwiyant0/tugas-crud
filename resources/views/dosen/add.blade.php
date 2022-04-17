@extends('template.master')
@section('judul', 'Tambah Data Dosen')

@section('isi')
    <h1>Tambah Data Dosen</h1>
    <form action="">
        <div class="mb-3">
            <label for="nim" class="form-label">Nim</label>
            <input type="text" id="nim" name="nim" class="form-control">
        </div>
        <div class="mb-3">
            <label for="nim" class="form-label">Nama Dosen</label>
            <input type="text" id="nama_dosen" name="nama_dosen" class="form-control">
        </div>
        <div class="mb-3">
            <label for="nim" class="form-label">Umur</label>
            <input type="number" id="umur" name="umur" class="form-control">
        </div>
        <button class="btn btn-warning">Submit</button>
    </form>
@endsection
