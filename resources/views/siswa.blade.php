@extends('master.master')
@section('title', 'Laravel')

@section('content')
<div class="container">
	<div class="card mt-5">
		<div class="card-header text-center">
			<h3>Data Siswa</h3>
		</div>
		<div class="card=body">
			<br>
			<a href="{{ url('siswa/siswatambah')}}" class="btn btn-primary ml-2">Input Siswa Baru</a>
			<br>
			<br>
			<div class="container">
			<table class="table table-bordered table-hover table-striped">
				<thead>
					<tr class="text-center">
						<th>Nama</th>
						<th>Umur</th>
						<th>Opsi</th>
					</tr>
				</thead>
				<tbody>
					@foreach($siswa as $p)
					<tr>
						<td>{{ $p-> nama}}</td>
						<td class="text-center">{{ $p-> umur}}</td>
						<td class="text-center">
							<a href="{{ route('siswa.edit', $p->id) }}" class="btn btn-warning">Edit</a>
							<form method="post" action="{{ route('siswa.delete', $p->id) }}" class="d-inline">
								@csrf
								@method('DELETE')
								<button type="submit" class="btn btn-danger"> Delete</button>
							</form>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
			</div>
		</div>
	</div>
</div>
@endsection