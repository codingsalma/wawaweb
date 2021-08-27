@extends('layouts.app')

@section('title', 'Tambah Mapel')

@section('navbar')
    @parent

   
@endsection

@section('content')
    <a href="/mapel"> Kembali</a>
	
	<br/>
	<br/>
 
	<form action="/mapel/store" method="post">
		{{ csrf_field() }}
		nama_mapel <input class="form-control" type="text" name="nama_mapel" required="required"> <br/>
		nama_guru <input class="form-control" type="text" name="nama_guru" required="required"> <br/>
  


		<input type="submit" value="Simpan Data">
	</form>
@endsection