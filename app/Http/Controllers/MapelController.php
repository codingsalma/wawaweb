<?php

namespace App\Http\Controllers;

use App\Mapel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MapelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	// mengambil data dari table mapel
    	$mapel = DB::table('mapel')->get();
 
        // mengirim data pegawai ke view index
        return view('mapel',['mapel' => $mapel]);
        //return view('kelas');
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mapel_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // insert data ke table mapel
    DB::table('mapel')->insert([
        'nama_mapel' => $request->nama_mapel,
        'nama_guru' => $request->nama_guru,
        
    ]);
    // alihkan halaman ke halaman mapel
    return redirect('/mapel');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mapel  $mapel
     * @return \Illuminate\Http\Response
     */
    public function show(Mapel $mapel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mapel  $mapel
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         // mengambil data kelas berdasarkan id yang dipilih
    $mapel = DB::table('mapel')->where('id_mapel',$id)->get();
    // passing data kelas yang didapat ke view edit.blade.php
    return view('mapel_edit',['mapel' => $mapel]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mapel  $mapel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mapel $Mapel)
    {
        // update data mapel
    DB::table('mapel')->where('id_mapel',$request->id)->update([
        'nama_mapel' => $request->nama_mapel,
        'nama_guru' => $request->nama_guru
    ]);
    // alihkan halaman ke halaman mapel
    return redirect('/mapel');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mapel  $mapel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // menghapus data mapel berdasarkan id yang dipilih
    DB::table('mapel')->where('id_mapel',$id)->delete();
        
    // alihkan halaman ke halaman mapel
    return redirect('/mapel');
    }
}
