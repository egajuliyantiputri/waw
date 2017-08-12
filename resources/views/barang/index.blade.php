@extends('layouts.master2')
@section('content')

<div class="row">
<div class="container">
	<center><h1>Data Barang</h1></center>
	<div class="panel panel-primary">
	<div class="panel-heading">Data Barang
	<div class="panel-title pull-right">
	<a href="barang/create">Tambah Data</a></div>
		
	</div>

	<div class="panel-body">
	<table class="table">
		<thead>
			<tr>
				<th>Id</th>
				<th>Jenis id</th>
				<th>Merk barang</th>
				<th>Stock </th>
				<th>Harga asli</th>
				<th>Harga jual</th>
				<th colspan="3">Action</th>
			</tr>
		</thead>
		<?php $no=1; ?>
		<tbody>
			@foreach($barang as $data)
			<tr>
			<td>{{$id}}</td>
			<td>{{$data->jenis_id}}</td>
			<td>{{$data->merk_barang}}</td>
			<td>{{$data->stock}}</td>
			<td>{{$data->harga_jual}}</td>
			<td>{{$data->harga_asli}}</td>

			<td>
				@role('admin')
				<td>
				<a class="btn btn-warning" href="/barang/{{$data->id}}/edit">Edit</a>
				</td>
				<td>
					<form action="{{route('barang.destroy', $data->id )}}" method="post">
						<input type="hidden" name="_method" value="DELETE">
						<input type="hidden" name="_token" >
						<input class="btn btn-danger" type="submit" value="Delete" >
				@endrole
						{{csrf_field()}}
					</form>
				</td>
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