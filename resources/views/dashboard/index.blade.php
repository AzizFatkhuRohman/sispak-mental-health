@extends('layouts.app')
@section('main')
  @if (Auth::user()->role === 'admin')
  <div class="container-fluid py-4">
  <div class="row">
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
      <div class="card">
        <div class="card-header p-3 pt-2">
          <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
            <i class="material-icons opacity-10">shopping_cart</i>
          </div>
          <div class="text-end pt-1">
            <p class="text-sm mb-0 text-capitalize">Total Penjualan {{$bulan}}</p>
            <h4 class="mb-0">$53k</h4>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
      <div class="card">
        <div class="card-header p-3 pt-2">
          <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
            <i class="material-icons opacity-10">person</i>
          </div>
          <div class="text-end pt-1">
            <p class="text-sm mb-0 text-capitalize">Total customer</p>
            <h4 class="mb-0">2,300</h4>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
      <div class="card">
        <div class="card-header p-3 pt-2">
          <div class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
            <i class="material-icons opacity-10">hourglass_full</i>
          </div>
          <div class="text-end pt-1">
            <p class="text-sm mb-0 text-capitalize">Pesanan pending</p>
            <h4 class="mb-0">3,462</h4>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6">
      <div class="card">
        <div class="card-header p-3 pt-2">
          <div class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
            <i class="material-icons opacity-10">weekend</i>
          </div>
          <div class="text-end pt-1">
            <p class="text-sm mb-0 text-capitalize">Pesanan berhasil</p>
            <h4 class="mb-0">$103,430</h4>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="card mt-3">
    <h5 class="card-header">Data Penjualan Terbaru</h5>
    <div class="card-body">
      <table class="table table-striped text-center">
        <thead class="table-info">
          <tr>
            <th scope="col">Pelanggan</th>
            <th scope="col">Produk</th>
            <th scope="col">Qty</th>
            <th scope="col">Total Bayar</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($tableAdmin as $item)
          <tr>
            <th scope="row">{{$item->user->nama}}</th>
            <td>{{$title->produk->nama_tansu}}</td>
            <td>{{$item->qty}}</td>
            <td>{{$item->total_bayar}}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
  @else
  <div class="container-fluid py-4">
  <div class="row justify-content-center">
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
      <div class="card">
        <div class="card-header p-3 pt-2">
          <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
            <i class="material-icons opacity-10">shopping_cart</i>
          </div>
          <div class="text-end pt-1">
            <p class="text-sm mb-0 text-capitalize">Total Pembelian {{$bulan}}</p>
            <h4 class="mb-0">$53k</h4>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
      <div class="card">
        <div class="card-header p-3 pt-2">
          <div class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
            <i class="material-icons opacity-10">hourglass_full</i>
          </div>
          <div class="text-end pt-1">
            <p class="text-sm mb-0 text-capitalize">Pesanan pending</p>
            <h4 class="mb-0">3,462</h4>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6">
      <div class="card">
        <div class="card-header p-3 pt-2">
          <div class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
            <i class="material-icons opacity-10">weekend</i>
          </div>
          <div class="text-end pt-1">
            <p class="text-sm mb-0 text-capitalize">Pesanan berhasil</p>
            <h4 class="mb-0">$103,430</h4>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="card mt-3">
    <h5 class="card-header">Data Pembelian Terbaru</h5>
    <div class="card-body">
      <table class="table table-striped text-center">
        <thead class="table-info">
          <tr>
            <th scope="col">No</th>
            <th scope="col">Produk</th>
            <th scope="col">Qty</th>
            <th scope="col">Total Bayar</th>
          </tr>
        </thead>
        <tbody>
          @php
              $no = 1;
          @endphp
          @foreach ($tableUser as $item)
          <tr>
            <th scope="row">{{$no++}}</th>
            <td>{{$item->produk->nama_tansu}}</td>
            <td>{{$item->qty}}</td>
            <td>{{$item->total_bayar}}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
  @endif
@endsection