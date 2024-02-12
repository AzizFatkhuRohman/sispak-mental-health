@extends('layouts.app');
@section('main')
    <div class="container-fluid">
        @if($errors->any())
        <div class="alert alert-warning">
            <ul>
                @foreach($errors->all() as $error)
                    <li style="color: white">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if(session('success'))
        <script>
            Swal.fire({
            title: "Good job!",
            text: "{{session('success')}}",
            icon: "success"
            });
        </script>
    @endif
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <div>
                    <h4>{{$data->nama_tansu}}</h4>
                    <span>Rp.{{$data->harga}}</span>
                </div>
                <div>
                    <!-- Button trigger modal -->
                <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Ubah
                </button>
                
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Ubah Produk</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        <form action="" method="post">
                            @method('PUT')
                            @csrf
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Nama Tansu</label>
                                <input type="text" class="form-control border border-info" id="exampleFormControlInput1" name="nama_tansu"
                                value="{{$data->nama_tansu}}">
                              </div>
                              <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Harga</label>
                                <input type="number" class="form-control border border-info" id="exampleFormControlInput1" name="harga"
                                value="{{$data->harga}}">
                              </div>
                              <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
                                <textarea class="form-control border border-info" id="exampleFormControlTextarea1" rows="3"
                                name="deskripsi">{{$data->deskripsi}}</textarea>
                              </div>
                        </div>
                        <div class="modal-footer">
                        <button type="submit" class="btn btn-info">Simpan</button>
                        </div>
                    </form>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="card-body">
                <img src="{{asset('produk/'.$data->photo)}}" class="card-img-top" alt="{{$data->photo}}">
              <p class="card-text mt-2">{{$data->deskripsi}}</p>
              <p class="card-text"><small class="text-body-secondary">{{$data->created_at}}</small></p>
            </div>
          </div>
    </div>
@endsection