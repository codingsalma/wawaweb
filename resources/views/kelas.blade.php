@extends('layouts.app')

@section('title', 'Kelas Page')

@section('navbar')
    @parent


@endsection

@section('content')
     <h3>Data kelas</h3>
 
	<a href="/kelas/create"> + Tambah Kelas Baru</a>
	
	<br/>
	<br/>
 
	<table border="1">
		<tr>
			
			<th>Kelas</th>
			<th>Jurusan</th>
			<th>Opsi</th>
		
		</tr>
		@foreach($kelas as $p)
		<tr>
			
			<td>{{ $p->kelas }}</td>
			<td>{{ $p->jurusan }}</td>
			<td>
				<a href="/kelas/edit/{{ $p->id_kelas }}">Edit</a>
				|
				<a href="/kelas/hapus/{{ $p->id_kelas }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
@endsection