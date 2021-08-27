@extends('layouts.app')

@section('title', 'Edit Mapel')

@section('navbar')
    @parent

   
@endsection

@section('content')
    <h3>Edit Mapel</h3>
 
	<a href="/Mapel"> Kembali</a>
	
	<br/>
	<br/>
 
	@foreach($mapel as $p)
	<form action="/mapel/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->id_mapel }}"> <br/>
		Nama mapel <input class="form-control" type="text" required="required" name="nama_mapel" value="{{ $p->nama_mapel }}"> <br/>
		Nama Guru <input class="form-control" type="text" required="required" name="nama_guru" value="{{ $p->nama_guru }}"> <br/>
 
  

		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
@endsection