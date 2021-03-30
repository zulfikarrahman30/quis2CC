@extends('barang.layout')
@section('content')
<div class="containermt-5">
<div class="row justify-content-center align-items-center">
<div class="card"style="width:24rem;">
	<div class="card-header">Detail barang</div>
<div class="card-body">
<ul class="list-grouplist-group-flush">
<li class="list-group-item">
<b>Kode barang:</b>{{$barang->kode_barang}}</li>
<li class="list-group-item">
<b>Nama barang:</b>{{$barang->nama_barang}}</li>
<li class="list-group-item">
<b>Kategori barang:</b>{{$barang->kategori_barang}}</li
><li class="list-group-item"
><b>harga:</b>{{$barang->harga}}</li>
<li class="list-group-item">
<b>qty:</b>{{$barang->qty}}
</li>
</ul>
</div>
<a class="btn btn-success mt-3"href="{{route('barang.index')}}">
Kembali
</a>
</div>
</div>
</div>
@endsection