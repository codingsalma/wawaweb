<?php

namespace App\Http\Controllers;

use App\Kelas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	// mengambil data dari table kelas
    	$kelas = DB::table('kelas')->get();
 
    	// mengirim data pegawai ke view index
    	return view('kelas',['kelas' => $kelas]);
    	//return view('kelas');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kelas_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // insert data ke table kelas
    DB::table('kelas')->insert([
        'kelas' => $request->kelas,
        'jurusan' => $request->jurusan,
        
    ]);
    // alihkan halaman ke halaman kelas
    return redirect('/kelas');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function show(Kelas $kelas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // mengambil data kelas berdasarkan id yang dipilih
    $kelas = DB::table('kelas')->where('id_kelas',$id)->get();
    // passing data kelas yang didapat ke view edit.blade.php
    return view('kelas_edit',['kelas' => $kelas]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kelas $Kelas)
    {
        // update data kelas
    DB::table('kelas')->where('id_kelas',$request->id)->update([
        'kelas' => $request->kelas,
        'jurusan' => $request->jurusan
    ]);
    // alihkan halaman ke halaman kelas
    return redirect('/kelas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // menghapus data kelas berdasarkan id yang dipilih
    DB::table('kelas')->where('id_kelas',$id)->delete();
        
    // alihkan halaman ke halaman kelas
    return redirect('/kelas');
    }
}