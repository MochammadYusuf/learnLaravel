@extends('master.master')
@section('title', 'About')

@section('content')
	<div class="container" style="margin-top: 20px;">
		<div class="col-md-12 mb-3">
			<h1 class="text-center">Tentang Semkanisa</h1>
		</div>
		<div class="row" style="font-size: 20px;">
			<div class="col-md-6">
				<p><i>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</i></p>
			</div>
			<div class="col-md-6">
				<p><i>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</i></p>
			</div>
		</div>
		<h4 style="margin-top: 40px;">Klik <i>Lihat Data Siswa</i> untuk melihat data</h4>
		<a class="btn btn-info" href="/datasiswa" type="button" style="margin-bottom: 10px;">Lihat Data Siswa</a>
	</div>
@endsection