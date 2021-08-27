@extends('layouts.app')

@section('title', 'Tambah Siswa')

@section('navbar')
    @parent

   
@endsection

@section('content')
    <a href="/siswa"> Kembali</a>
	
	<br/>
	<br/>
 
	<form action="/siswa/store" method="post">
		{{ csrf_field() }}
		Nama <input class="form-control" type="text" name="nama" required="required"> <br/>
		<select class="form-control" name="jenkel">
  <option value="L">Laki-Laki</option>
  <option value="P">Perempuan</option>
</select>
		Alamat <textarea class="form-control" name="alamat" required="required"></textarea> <br/>
		<input type="submit" value="Simpan Data">
	</form>
@endsection