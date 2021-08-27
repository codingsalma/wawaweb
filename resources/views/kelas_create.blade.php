@extends('layouts.app')

@section('title', 'Tambah Kelas')

@section('navbar')
    @parent

   
@endsection

@section('content')
    <a href="/kelas"> Kembali</a>
	
	<br/>
	<br/>
 
	<form action="/kelas/store" method="post">
		{{ csrf_field() }}
		kelas <input class="form-control" type="text" name="kelas" required="required"> <br/>
		jurusan <input class="form-control" type="text" name="jurusan" required="required"> <br/>
  


		<input type="submit" value="Simpan Data">
	</form>
@endsection