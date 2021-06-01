@extends('layouts.app')

@section('content')
<div class="wrapper">
    <h1>Tambah Jadwal Kuliah</h1>
    
    @if (session('success'))
    <div class="alert-success">
      <p>{{ session('success') }}</p>
    </div>
    @endif
    
    @if ($errors->any())
    <div class="alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
    @endif
    
    <form action="{{ route('jadwalkuliah.store')}}" method="POST">

      @csrf
      <div class="form-group">
        <label for="kd_mkul">Kode Mata Kuliah <span class="required">*</span></label>
        <input type="number" name="kd_mkul" class="form-control" id="kd_mkul" placeholder=" Masukan Kode Mata Kuliah" value="">
    </div>
    <div class="form-group">
        <label for="nama_mkul">Nama Mata Kuliah <span class="required">*</span></label>
        <input type="text" name="nama_mkul" class="form-control" id="nama_mkul" placeholder=" Masukan Nama Mata Kuliah" value="">
    </div>
    <div class="form-group">
        <label for="kd_dosen">Kode Dosen <span class="required">*</span></label>
        <input type="number" name="kd_dosen" class="form-control" id="kd_dosen" placeholder=" Masukan Kode Dosen Pengajar" value="">
    </div>
    <div class="form-group">
        <label for="jam">Jam <span class="required">*</span></label>
        <input type="time" name="jam" class="form-control" id="jam" placeholder=" Masukan Jam" value="">
    </div>
    <div class="form-group">
        <label for="ruang_kelas">Ruang Kelas <span class="required">*</span></label>
        <input type="text" name="ruang_kelas" class="form-control" id="ruang_kelas" placeholder=" Masukan Ruang Kelas" value="">
    </div>
    <div class="form-group">
        <label for="jumlah_mhs">Jumlah Mahasiswa <span class="required">*</span></label>
        <input type="number" name="jumlah_mhs" class="form-control" id="jumlah_mhs" placeholder=" Masukan Jumlah Mahasiswa" value="">
    </div>
    <div class="form-group">
        <label for="tanggal_mulai">Tanggal Mulai <span class="required">*</span></label>
        <input type="date" name="tanggal_mulai" class="form-control" id="tanggal_mulai" placeholder=" Masukan Tanggal Mulai" value="">
    </div>
    <div class="box-header pull-left">
        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
        <a href="{{Route ('jadwalkuliah.index')}}" class="btn btn-danger"><i class="fa fa-arrow-left"></i> Kembali</a>
    </div>
    </form>
  </div>

@endsection