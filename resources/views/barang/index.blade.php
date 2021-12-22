@extends('barang.layout')
@section('content')
<div class="row">
	<div class="col-lg-12margin-tb">
		<div class="pull-leftmt-2">
			<h2>JURUSAN TEKNOLOGI INFORMASI-POLITEKNIK NEGERI MALANG</h2>
		</div>
		<div class="float-rightmy-2">
		<a class="btn btn-success"href="{{route('barang.create')}}">Input barang</a>
	</div>
</div>
</div>
<br>
@if($message=Session::get('success'))
<div class="alert alert-success">
<p>{{$message}}
</p>
</div>
@endif
<form method="post" action="{{url('cari')}}" id="myForm">
@csrf
	<div class="form-group">
	<label for="cari">Cari</label>
	<input type="text"name="cari"class="form-control"id="cari"aria-describedby="cari"  placeholder="cari ">
	</div>
	<button type="submit" class="btn btn-success mt-3">
cari
</button>
</form> 

<table class="table table-bordered">

	<tr>
		<th>Id</th>
		<th>Kode Barang</th>
		<th>Nama Barang</th>
		<th>Kategori barang</th>
		<th>Harga</th>
		<th>qty</th>
		<th width="280px">Action</th>
	</tr>
	@foreach($data as $index => $barang)
	<tr>
		<td>{{$index + $data->firstItem()}}</td>
		<td>{{$barang->kode_barang}}</td>
		<td>{{$barang->nama_barang}}</td>
		<td>{{$barang->kategori_barang}}</td>
		<td>{{$barang->harga}}</td>
		<td>{{$barang->qty}}</td>
		<td>
		
		{{-- <form action="{{route('barang.destroy',['barang'=>$barang->id_barang])}}"method="POST"> --}}
		<a class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus barang?')" href="{{url('delete',['barang'=>$barang->id_barang])}}">Delete</a>
		<a class="btn btn-info"href="{{route('barang.show',['barang'=>$barang->id_barang])}}">Show</a>

		<a class="btn btn-primary"href="{{route('barang.edit',['barang'=>$barang->id_barang])}}">Edit</a>
		

</td>
</tr>
@endforeach
{{$data->links()}}
</table>
@endsection