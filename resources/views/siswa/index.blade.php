@extends('master.master')
@section('title', 'Data Siswa')

@section('content')
<div class="container" style="margin-top: 20px;">
	<div class="col-md-12 mb-3">
		<h1 class="text-center">Data Siswa</h1>
	</div>
	<a class="btn btn-success" href="/datasiswa/create" type="button" style="margin-bottom: 10px;">Tambah Data Siswa +</a>
	<table class="table text-light">
		<thead class="" style="font-size: 20px; background-color: #183d5d;">
			<th class="text-center">No.</th>
			<th>NISN</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th class="text-center">Action</th>
		</thead>
		<tbody>
			@foreach ($siswa as $s)
			<tr style="font-size: 20px; ">
				<td style="width: 1%; white-space: nowrap;">{{ $s->id }}</td>
				<td style="width: 1%; white-space: nowrap;">{{ $s->nisn }}</td>
				<td>{{ $s->nama }}</td>
				<td>{{ $s->alamat }}</td>
				<td style="width: 1%; white-space: nowrap;">
					<a class="btn btn-sm btn-warning" href="#">Edit</a>
					<a class="btn btn-sm btn-danger" href="#">Delete</a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@endsection