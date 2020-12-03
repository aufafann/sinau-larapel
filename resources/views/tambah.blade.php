@extends('master.master')
@section('title', 'Laravel')

@section('content')
<div class="container">
	<div class="card mt-5">
		<div class="card-header text-center">
			Form Tambah Data Siswa
		</div>
		<div class="card=body">
			<br>
			<a href="{{ url('siswa')}}" class="btn btn-primary mx-2">Kembali</a>
			<br>
			<br>
			
			<form method="post" action="/siswa/store">
				@csrf
				<div class="form-group mx-2">
					<label>Nama</label>
					<input type="text" name="nama" placeholder="Masukkan Nama" class="form-control">
				</div>
				<div class="form-group mx-2">
					<label>Umur</label>
					<input type="number" name="umur" placeholder="Masukkan Umur" class="form-control">
				</div>
				<br>
				<br>
				<div class="card-footer">
					<button type="submit" class="btn btn-primary">Submit</button>
				</div>
			</form>
 

		</div>
	</div>
</div>
@endsection