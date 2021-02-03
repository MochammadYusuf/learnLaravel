@extends('master.master')
@section('title', 'Data Siswa')

@section('content')
<div class="container" style="margin-top: 20px;">

	@if(session('alert'))
		<div class="alert alert-success alert-dismissible fade show" role="alert">
			{{ session('alert') }}
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>
	@endif

	<div class="col-md-12 mb-3">
		<h1 class="text-center">Data Siswa</h1>
	</div>
	<a class="btn btn-success" href="/datasiswa/create" type="button" style="margin-bottom: 10px;">Tambah Data Siswa +</a>
	
	<div style="height: 350px; overflow: auto;">
		<table class="table text-light" style="width: 100%; margin-bottom: 0px;">
			<thead style="font-size: 20px; ">
				<th class="text-center" style="position: sticky; top: 0; background-color: #183d5d;">No.</th>
				<th style="position: sticky; top: 0; background-color: #183d5d;">NISN</th>
				<th style="position: sticky; top: 0; background-color: #183d5d;">Nama</th>
				<th style="position: sticky; top: 0; background-color: #183d5d;">Alamat</th>
				<th class="text-center" style="position: sticky; top: 0; background-color: #183d5d;">Action</th>
			</thead>
			<tbody class="text-nowrap">
				@foreach ($siswa as $s)
				<tr style="font-size: 20px;">
					<td class="text-center" style="width: 1%; white-space: nowrap;">{{ $loop->iteration }}</td>
					<td style="width: 1%; white-space: nowrap;">{{ $s->nisn }}</td>
					<td>{{ $s->nama }}</td>
					<td>{{ $s->alamat }}</td>
					<td style="width: 1%; white-space: nowrap;">
						<a class="btn btn-sm btn-warning" href="/datasiswa/{{$s->id}}/edit">Edit</a>
						<a class="btn btn-sm btn-danger" href="/datasiswa/{{$s->id}}/destroy" onclick="return confirm('Ingin menghapus data?')">Delete</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>

</div>
@endsection