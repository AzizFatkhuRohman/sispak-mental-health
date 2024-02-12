@extends('layouts.app')
@section('main')
    <div class="container-fluid">
        <div class="card">
            <h5 class="card-header">Data {{$title}}</h5>
            <div class="card-body">
                <table class="table table-stiped text-center">
                    <thead class="table-info">
                      <tr>
                        <th scope="col">Pembeli</th>
                        <th scope="col">Produk</th>
                        <th scope="col">Qty</th>
                        <th scope="col">Status</th>
                        <th scope="col">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($data as $item)
                      <tr>
                        <th scope="row">{{$item->user->nama}}</th>
                        <td>{{$item->produk->nama_tansu}}</td>
                        <td>{{$item->qty}}</td>
                        <td>
                            @if ($item->status === 'pending')
                                <button class="btn btn-outline-warning btn-sm">
                                    {{$item->status}}
                                </button>
                            @else
                            <button class="btn btn-outline-success btn-sm">
                                {{$item->status}}
                            </button>
                            @endif
                        </td>
                        <td>
                            <a href="{{url('detail-riwayat-penjualan')}}" class="btn btn-warning btn-sm">
                                Lihat
                            </a>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
            </div>
          </div>
    </div>
@endsection