<?php

namespace App\Http\Controllers;

use App\Siswa;
use App\Jurusan;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswas = Siswa::all();
        return view('siswa.index', [
            'siswas' => $siswas
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jurusans = Jurusan::all();
        return view('siswa.create', [
            'jurusans' => $jurusans
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = validator($request->all(), [
            'id_jurusan' => 'required|integer',
            'nama_siswa'=> 'required|string|max: 255',
            'alamat' => 'required|string',
        ])->validate();

        $siswa = new Siswa($validatedData);
        $siswa->save();

        return redirect(route('daftarSiswa'))->with('success', 'Data Berhasil Disimpan');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function show(Siswa $siswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function edit(Siswa $siswa)
    {
        $jurusans = Jurusan::all();
        return view('siswa.edit', [
            'siswa' => $siswa,
            'jurusans' => $jurusans
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Siswa $siswa)
    {
        $validatedData = validator($request->all(), [
            'id_jurusan' => 'required|integer',
            'nama_siswa' => 'required|string|max:255',
            'alamat' => 'required|string',

        ])->validate();

        $siswa->id_jurusan = $validatedData['id_jurusan'];
        $siswa->nama_siswa = $validatedData['nama_siswa'];
        $siswa->alamat = $validatedData['alamat'];
        $siswa->save();

        return redirect(route('daftarSiswa'))->with('success', 'Data Berhasil Di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Siswa $siswa)
    {
        $siswa->delete();
        return redirect(route('daftarSiswa'))->with('success', 'Data Berhasil Dihapus');
    }
}
