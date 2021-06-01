@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-3">
        <form action="" method="get" class="sidebar-form">
            <div class="input-group pull-left">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                    <button type="submit" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
        </form>
    </div>
    
    <div class="col-md-9">
        <div class="pull-right">
            <a href="{{route ('jadwalkuliah.create')}}" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Jadwal</a>
        </div>
    </div>

    <div class="col-md-12">
        <hr>
        <div class="table-responsive" style="height: 400px">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th width="10px">No</th>
                        <th>Kode Mata Kuliah</th>
                        <th>Nama Mata Kuliah</th>
                        <th>Kode Dosen</th>
                        <th>Jam</th>
                        <th>Ruang Kelas</th>
                        <th>Jumlah Mahasiswa</th>
                        <th>Tanggal Mulai</th>
                        <th class="pull-right">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($list_jadwal as $key => $item)

                    <tr>
                        <td><strong>{{ $key+1 }}</strong></td>
                        <td>{{ $item->kd_mkul}}</td>
                        <td>{{ $item->nama_mkul}}</td>
                        <td>{{ $item->kd_dosen}}</td>
                        <td>{{ $item->jam}}</td>
                        <td>{{ $item->ruang_kelas}}</td>
                        <td>{{ $item->jumlah_mhs}}</td>
                        <td>{{ $item->tanggal_mulai}}</td>

                        <td class="pull-right">
                            <a href="{{Route ('jadwalkuliah.edit', ['id' => $item->id]) }}" class="btn btn-success btn-xs"><i class="fa fa-search"></i> Edit</a>
                            <a href="{{Route ('jadwalkuliah.delete', ['id' => $item->id]) }}" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection