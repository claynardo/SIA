<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\jadwal_kuliah;

class jadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if(isset($_GET['q']))
        {
            $list_jadwal = jadwal_kuliah::where('kd_mkul', 'like', '%'.$_GET['q'].'%')->orWhere('nama_mkul', 'like', '%'.$_GET['q'].'%')
            ->orWhere('kd_dosen', 'like', '%'.$_GET['q'].'%')->orWhere('ruang_kelas', 'like', '%'.$_GET['q'].'%')->get();
        } else {
            $list_jadwal=jadwal_kuliah::orderBy('tanggal_mulai', 'asc')->paginate(20);
        }

        $data = array(
            'pageTitle' => "Daftar Alumni",
            'list_jadwal' => $list_jadwal
        );

        return view('jadwalkuliah.index', $data);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = array(
            'pageTitle' => "Tambah Acara Admin",
        );

    return view('jadwalkuliah.create', $data);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'kd_mkul' => 'required',
            'nama_mkul' => 'required',
            'kd_dosen' => 'required',
            'jam' => 'required',
            'ruang_kelas' => 'required',
            'jumlah_mhs' => 'required',
            'tanggal_mulai' => 'required',

        ]);

        $simpan = new jadwal_kuliah();
        $simpan->kd_mkul = $request->kd_mkul;
        $simpan->nama_mkul = $request->nama_mkul;
        $simpan->kd_dosen = $request->kd_dosen;
        $simpan->jam = $request->jam;
        $simpan->ruang_kelas = $request->ruang_kelas;
        $simpan->jumlah_mhs = $request->jumlah_mhs;
        $simpan->tanggal_mulai = $request->tanggal_mulai;
        
        $simpan->save();

        
        
        if ($simpan->save()) {
            return redirect()->route('jadwalkuliah.index')->with('success','Jadwal Kuliah berhasil ditambahkan');
        } else {
            return redirect()->route('jadwalkuliah.create')->with('error','Jadwal Kuliah gagal ditambahkan');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $list_jadwal=jadwal_kuliah::findorfail($id);

        $data = array(
            'pageTitle' => "Edit Jadwal Kuliah ",
            'list_jadwal' => $list_jadwal,
        );
            
        return view('jadwalkuliah.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'kd_mkul' => 'required',
            'nama_mkul' => 'required',
            'kd_dosen' => 'required',
            'jam' => 'required',
            'ruang_kelas' => 'required',
            'jumlah_mhs' => 'required',
            'tanggal_mulai' => 'required',
        ]);

        $simpan = jadwal_kuliah::findorfail($id);
        $simpan->kd_mkul = $request->kd_mkul;
        $simpan->nama_mkul = $request->nama_mkul;
        $simpan->kd_dosen = $request->kd_dosen;
        $simpan->jam = $request->jam;
        $simpan->ruang_kelas = $request->ruang_kelas;
        $simpan->jumlah_mhs = $request->jumlah_mhs;
        $simpan->tanggal_mulai = $request->tanggal_mulai;
        
        $simpan->save();
        
        if ($simpan->save()) {
            return redirect()->route('jadwalkuliah.index')->with('success','Jadwal berhasil diedit');
        } else {
            return redirect()->route('jadwalkuliah.edit')->with('error','Jadwal gagal diedit');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $list_jadwal = jadwal_kuliah::find($id);
        $list_jadwal->delete();

       return redirect()->route('jadwalkuliah.index')->with('success','Jadwal berhasil dihapus');

    }
}
