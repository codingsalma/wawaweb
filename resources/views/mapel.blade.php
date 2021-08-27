@extends('layouts.app')

@section('title', 'mapel')

@section('navbar')
    @parent

    
@endsection

@section('content')
     <h3>Data Mapel</h3>
 
	<a href="/mapel/create"> + Tambah Mapel Baru</a>
	
	<br/>
	<br/>
 
	<table border="1">
		<tr>
			
			<th>Nama_mapel</th>
			<th>Nama_guru</th>
			<th>Opsi</th>
		
		</tr>
		@foreach ($mapel as $p) 
		<tr>
			
			<td>{{ $p->nama_mapel }}</td>
			<td>{{ $p->nama_guru }}</td>
			<td>
				<a href="/mapel/edit/{{ $p->id_mapel }}">Edit</a>
				|
				<a href="/mapel/hapus/{{ $p->id_mapel }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
@endsection