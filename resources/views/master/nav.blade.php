<nav class="navbar navbar-expand-lg" style="background-color: rgb(0, 105, 255);">
	<div class="container">
		<a class="navbar-brand scroll" href="/" style="font-size: 25px;">
			<img src="/image/logo_smk.png" width="40" height="40" class="d-inline-block align-top">
			SEMKANISA</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
			<div class="navbar-nav">
				<a class="nav-item nav-link navbar-right scroll" href="/about" id="underlined">About<span class="sr-only">(current)</span></a>
				<a class="nav-item nav-link navbar-right scroll" href="/datasiswa" id="underlined">Data Siswa</a>
				<a class="nav-item nav-link navbar-right scroll" href="/contact" id="underlined">Contact</a>
				<a class="nav-item nav-link navbar-right scroll" href="{{ route('logout') }}" id="underlined">Logout</a>
			</div>
		</div>
	</div>
</nav>