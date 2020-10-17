@extends('master.master')
@section('title', 'Data')

@section('content')
<table class="table">
	<thead class="thead-dark">
		<tr>
			<th scope="col">#</th>
			<th scope="col">Nama</th>
			<th scope="col">Kelas</th>
			<th scope="col">NISN</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<th scope="row">1</th>
			<td>Yusuf</td>
			<td>XII RPL 2</td>
			<td>0069345345</td>
		</tr>
	</tbody>
</table>
@endsection