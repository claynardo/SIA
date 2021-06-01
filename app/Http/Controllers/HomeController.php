<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\jadwal_kuliah;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

     public function index()
    {

        $chart = DB::table('jadwal_kuliahs')->get('*')->toArray();
        foreach($chart as $row)
        {
            $chart[] = array
            (
                'label'=>$row->nama_mkul,
                'y'=>$row->jumlah_mhs
            ); 
        }
        return view('home',['chart' => $chart]);
    }
}
