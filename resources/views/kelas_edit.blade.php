@extends('layouts.app')

@section('title', 'Edit Siswa')

@section('navbar')
    @parent

   
@endsection

@section('content')
    <h3>Edit Siswa</h3>
 
	<a href="/Kelas"> Kembali</a>
	
	<br/>
	<br/>
 
	@foreach($kelas as $p)
	<form action="/kelas/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->id_kelas }}"> <br/>
		Kelas <input class="form-control" type="text" required="required" name="kelas" value="{{ $p->kelas }}"> <br/>
		Jurusan <input class="form-control" type="text" required="required" name="jurusan" value="{{ $p->jurusan }}"> <br/>
 
  

		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
@endsection