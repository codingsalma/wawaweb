@extends('layouts.app')

@section('title', 'Edit Siswa')

@section('navbar')
    @parent

   
@endsection

@section('content')
    <h3>Edit Siswa</h3>
 
	<a href="/siswa"> Kembali</a>
	
	<br/>
	<br/>
 
	@foreach($siswa as $p)
	<form action="/siswa/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->id_siswa }}"> <br/>
		Nama <input class="form-control" type="text" required="required" name="nama" value="{{ $p->nama }}"> <br/>
		<select class="form-control" name="jenkel" >
 <option value="{{ $p->jenkel }}">{{ $p->jenkel }}</option>
  <option value="L">Laki-Laki</option>
  <option value="P">Perempuan</option>
</select>
		Alamat <textarea class="form-control" required="required" name="alamat">{{ $p->alamat }}</textarea> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
@endsection