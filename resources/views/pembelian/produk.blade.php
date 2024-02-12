@extends('layouts.app')
@section('main')
    <div class="container-fluid">
            @foreach ($data as $item)
            <div class="card" style="margin-bottom:2px">
                <img src="{{asset('produk/'.$item->photo)}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{$item->nama_tansu}}/ Rp.{{$item->harga}}</h5>
                  <p class="card-text">{{$item->deskripsi}}</p>
                </div>
                <div class="card-footer">
                    <a href="{{url('beli/'.$item->id)}}" class="btn btn-info btn-sm">Beli</a>
                </div>
              </div>
            @endforeach
    </div>
@endsection