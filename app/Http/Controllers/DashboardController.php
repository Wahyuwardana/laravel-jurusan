<?php

namespace App\Http\Controllers;

use App\Siswa;
use App\Jurusan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $id = Siswa::get('id_jurusan')->all();
        // $jurusan = Jurusan::get($id)->all();
        // return view('dashboard',compact('siswas','jurusan'));



        $data = DB::table('siswas')
        ->join('jurusans','siswas.id_jurusan','=','jurusans.id')
        ->select('siswas.nama_siswa','siswas.alamat','jurusans.nama','jurusans.deskripsi')
        ->get();

        // $siswas = "SELECT id_jurusan, COUNT(*) as total FROM siswas GROUP BY id_jurusan";
        $siswas = DB::table('siswas')->selectRaw('id_jurusan, count(*)')->groupBy('id_jurusan');

        return view('dashboard', [
            'datas'=>$data,
            'siswas'=>$siswas,

        ]);
        // return dd($data);
    }
}
