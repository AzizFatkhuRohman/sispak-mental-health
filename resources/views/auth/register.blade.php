@extends('layouts.auth')
@section('main')
<div class="container-fluid pt-5 bg-primary hero-header">
  <div class="container pt-5">
      <div class="row g-5 pt-5">
          <div class="col-lg-4 align-self-center text-center text-lg-start mb-lg-5">
              <h1 class="display-4 text-white mb-4 animated slideInRight">Daftar</h1>
              <p class="text-white mb-4 animated slideInRight">Menjadi lebih kuat dengan mendiagnosa dan mengelola gangguan mental</p>
              <div class="mb-3">
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nama">
              </div>
              <div class="mb-3">
                  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Email">
                </div>
                <div class="mb-3">
                  <input type="Password" class="form-control" id="exampleFormControlInput1" placeholder="Password">
                </div>
                <div class="mb-3">
                    <input type="Password" class="form-control" id="exampleFormControlInput1" placeholder="Konfirmasi password">
                  </div>
                <div class="mb-2">
                  <button class="btn btn-warning text-white" type="submit">Masuk</button>
                </div>
                <div class="mb-2 d-flex">
                  <p class="text-white" style="margin-right: 2px">Sudah punya akun?</p>
                  <a href="{{url('login')}}" style="color: yellow">Masuk</a>
                </div>
          </div>
          <div class="col-lg-8 align-self-end text-center text-lg-end">
              <img class="img-fluid" src="{{asset('img/hero-img.png')}}" alt="">
          </div>
      </div>
  </div>
</div>
@endsection
