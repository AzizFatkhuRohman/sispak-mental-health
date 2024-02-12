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
@if(session('delete'))
    <script>
        Swal.fire({
        title: "Good job!",
        text: "{{session('delete')}}",
        icon: "success"
        });
    </script>
@endif
        <div class="card mt-3">
            <div class="d-flex justify-content-between card-header">
                <h5>Data Produk</h5>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Tambah
            </button>
            
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Produk</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <form action="" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Nama Tansu</label>
                            <input type="text" class="form-control border border-info" id="exampleFormControlInput1"
                            name="nama_tansu">
                          </div>
                          <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Photo</label>
                            <input type="file" class="form-control border border-info" id="exampleFormControlInput1"
                            name="photo">
                          </div>
                          <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Harga</label>
                            <input type="number" class="form-control border border-info" id="exampleFormControlInput1"
                            name="harga">
                          </div>
                          <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
                            <textarea class="form-control border border-info" id="exampleFormControlTextarea1" rows="3"
                            name="deskripsi"></textarea>
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
            <div class="card-body">
                <table class="table table-striped text-center">
                    <thead class="table-info">
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Tansu</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                      @foreach ($data as $item)
                      <tr>
                        <th scope="row">{{$no++}}</th>
                        <td>{{$item->nama_tansu}}</td>
                        <td>Rp. {{$item->harga}}</td>
                        <td>
                                <a href="{{url('lihat-produk/'.$item->id)}}" class="btn btn-warning btn-sm">Lihat</a>
                                <form action="{{url('hapus-produk/'.$item->id)}}" method="post" id="form-produk">
                                    @method('DELETE')
                                    @csrf
                                    <button type="button" class="btn btn-danger btn-sm" id="hapus-produk">Hapus</button>
                                </form>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
            </div>
          </div>
    </div>
    <!-- resources/views/welcome.blade.php -->
<script>
    document.getElementById('hapus-produk').addEventListener('click', function(e) {
        e.preventDefault();
        Swal.fire({
            title: 'Apakah Anda yakin ingin menghapus ini?',
            text: "Ini akan terhapus secara permanen.",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, Hapus'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('form-produk').submit();
            }
        });
    });
</script>

@endsection