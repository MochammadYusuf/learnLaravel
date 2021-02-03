@extends('master.master')
@section('title', 'Tambah Data')

@section('content')
		<div class="container" style="margin-top: 20px;">
			<div class="col-md-12 mb-3">
				<h1 class="text-center">Tambah Data Siswa</h1>
			</div>
			<!-- @if ($errors->any())
				<div class="alert alert-secondary">
					<ul class="mb-0">
						@foreach ($errors->all() as $item)
						<li>{{ $item }}</li>
						@endforeach
					</ul>
				</div>
			@endif -->
			<form method="post" action="/datasiswa">
			@csrf
			  <div class="form-group">
			    <label for="inputEmail4">NISN</label>
			    <input type="number" class="form-control" name="nisn">
			    @error('nisn')
			    	<div class="small text-light">{{ $message }}</div>
			    @enderror
			  </div>
			  <div class="form-group">
			    <label for="inputAddress">Nama</label>
			    <input type="text" class="form-control" name="nama">
			    @error('nama')
			    	<div class="small text-light">{{ $message }}</div>
			    @enderror
			  </div>
			  <div class="form-group">
			    <label for="inputAddress2">Alamat</label>
			    <input class="form-control" type="text" name="alamat"></input>
			    @error('alamat')
			    	<div class="small text-light">{{ $message }}</div>
			    @enderror
			  </div>
			  <button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
@endsection