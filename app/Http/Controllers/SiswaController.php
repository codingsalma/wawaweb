<?php

namespace App\Http\Controllers;

use App\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // mengambil data dari table siswa
        $siswa = DB::table('siswa')->get();
 
        // mengirim data siswa ke view index
        return view('siswa',['siswa' => $siswa]);
        //return view('siswa');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('siswa_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // insert data ke table siswa
    DB::table('siswa')->insert([
        'nama' => $request->nama,
        'jenkel' => $request->jenkel,
        'alamat' => $request->alamat,
        
    ]);
    // alihkan halaman ke halaman siswa
    return redirect('/siswa');
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
    public function edit($id)
    {
        // mengambil data siswa berdasarkan id yang dipilih
    $siswa = DB::table('siswa')->where('id_siswa',$id)->get();
    // passing data siswa yang didapat ke view edit.blade.php
    return view('siswa_edit',['siswa' => $siswa]);
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
        // update data siswa
    DB::table('siswa')->where('id_siswa',$request->id)->update([
        'nama' => $request->nama,
        'jenkel' => $request->jenkel,
        'alamat' => $request->alamat
    ]);
    // alihkan halaman ke halaman siswa
    return redirect('/siswa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // menghapus data siswa berdasarkan id yang dipilih
    DB::table('siswa')->where('id_siswa',$id)->delete();
        
    // alihkan halaman ke halaman pegawai
    return redirect('/siswa');
    }
}
