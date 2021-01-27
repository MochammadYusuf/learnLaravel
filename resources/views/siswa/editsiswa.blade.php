@extends('master.master')
@section('title', 'Edit Data')

@section('content')
		<div class="container" style="margin-top: 20px;">
			<div class="col-md-12 mb-3">
				<h1 class="text-center">Edit Data Siswa</h1>
			</div>
			<form method="post" action="{{ route('update', $getSiswa->id) }}">
			@csrf
			  <div class="form-group">
			    <label for="inputEmail4">NISN</label>
			    <input type="number" class="form-control" name="nisn" value="{{ $getSiswa->nisn }}">
			  </div>
			  <div class="form-group">
			    <label for="inputAddress">Nama</label>
			    <input type="text" class="form-control" name="nama" value="{{ $getSiswa->nama }}">
			  </div>
			  <div class="form-group">
			    <label for="inputAddress2">Alamat</label>
			    <input class="form-control" type="text" name="alamat" value="{{ $getSiswa->alamat }}"></input>
			  </div>
			  <button type="submit" class="btn btn-primary">Simpan</button>
			</form>
		</div>
@endsection