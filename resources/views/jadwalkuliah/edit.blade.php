@extends('layouts.app')

@section('content')
<div class="wrapper">
    <h1>Edit Jadwal Kuliah</h1>
    
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
                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="kd_mkul">Kode Mata Kuliah <span class="required">*</span></label>
                        <input type="number" name="kd_mkul" class="form-control" id="kd_mkul" placeholder=" Masukan Kode Mata Kuliah" value="{{ $list_jadwal->kd_mkul }}">
                    </div>
                    <div class="form-group">
                        <label for="nama_mkul">Nama Mata Kuliah <span class="required">*</span></label>
                        <input type="text" name="nama_mkul" class="form-control" id="nama_mkul" placeholder=" Masukan Nama Mata Kuliah" value="{{ $list_jadwal->nama_mkul }}">
                    </div>
                    <div class="form-group">
                        <label for="kd_dosen">Kode Dosen <span class="required">*</span></label>
                        <input type="number" name="kd_dosen" class="form-control" id="kd_dosen" placeholder=" Masukan Kode Dosen Pengajar" value="{{ $list_jadwal->kd_dosen }}">
                    </div>
                    <div class="form-group">
                        <label for="jam">Jam <span class="required">*</span></label>
                        <input type="time" name="jam" class="form-control" id="jam" placeholder=" Masukan Jam" value="{{ $list_jadwal->jam }}">
                    </div>
                    <div class="form-group">
                        <label for="ruang_kelas">Ruang Kelas <span class="required">*</span></label>
                        <input type="text" name="ruang_kelas" class="form-control" id="ruang_kelas" placeholder=" Masukan Ruang Kelas" value="{{ $list_jadwal->ruang_kelas }}">
                    </div>
                    <div class="form-group">
                        <label for="jumlah_mhs">Jumlah Mahasiswa <span class="required">*</span></label>
                        <input type="number" name="jumlah_mhs" class="form-control" id="jumlah_mhs" placeholder=" Masukan Jumlah Mahasiswa" value="{{ $list_jadwal->jumlah_mhs }}">
                    </div>
                    <div class="form-group">
                        <label for="tanggal_mulai">Tanggal Mulai <span class="required">*</span></label>
                        <input type="date" name="tanggal_mulai" class="form-control" id="tanggal_mulai" placeholder=" Masukan Tanggal Mulai" value="{{ $list_jadwal->tanggal_mulai }}">
                    </div>
                    <div class="box-header pull-left">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
                        <a href="{{Route ('jadwalkuliah.index')}}" class="btn btn-danger"><i class="fa fa-arrow-left"></i> Kembali</a>
                    </div>
                </form>
            </div>
    </div>

@endsection