@extends('layouts.app')

@section('title', 'Siswa Page')

@section('navbar')
    @parent

   
@endsection

@section('content')
    <h3>Data Siswa</h3>
 
	<a href="/siswa/create"> + Tambah Siswa Baru</a>
	
	<br/>
	<br/>
 
	<table border="1">
		<tr>
			<th>Nama</th>
			<th>Jennis Kelamin</th>
			<th>Alamat</th>
			<th>Opsi</th>
		
		</tr>
		@foreach($siswa as $p)
		<tr>
			<td>{{ $p->nama }}</td>
			<td>{{ $p->jenkel }}</td>
			<td>{{ $p->alamat }}</td>
			<td>
				<a href="/siswa/edit/{{ $p->id_siswa }}">Edit</a>
				|
				<a href="/siswa/hapus/{{ $p->id_siswa }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
@endsection