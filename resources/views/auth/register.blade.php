@extends('layouts.auth')
@section('main')
<div class="container-fluid pt-5 bg-primary hero-header">
  <div class="container pt-5">
      <div class="row g-5 pt-5">
          <div class="col-lg-4 align-self-center text-center text-lg-start mb-lg-5">
              <h1 class="display-4 text-white mb-4 animated slideInRight">Daftar</h1>
              <p class="text-white mb-4 animated slideInRight">Daftar untuk segera miliki akun</p>
              <form action="" method="post">
                @csrf
                <div class="mb-3">
                  @if($errors->has('nama'))
                      <input type="text" class="form-control border border-danger border-2" id="exampleFormControlInput1" 
                      placeholder="{{ $errors->first('nama') }}" name="nama">
                   @else
                   <input type="text" class="form-control" id="exampleFormControlInput1" 
                      placeholder="Nama" name="nama">
                  @endif
                </div>
                <div class="mb-3">
                  @if($errors->has('email'))
                  <input type="text" class="form-control border border-danger border-2" id="exampleFormControlInput1" 
                  placeholder="{{ $errors->first('email') }}" name="email">
               @else
               <input type="email" class="form-control" id="exampleFormControlInput1" 
                  placeholder="Email" name="email">
              @endif
                  </div>
                  <div class="mb-3">
                    @if($errors->has('password'))
                  <input type="text" class="form-control border border-danger border-2" id="exampleFormControlInput1" 
                  placeholder="{{ $errors->first('password') }}" name="password">
               @else
               <input type="password" class="form-control" id="exampleFormControlInput1" 
                  placeholder="Password" name="password">
              @endif
                  </div>
                  <div class="mb-3">
                      <input type="Password" class="form-control" id="exampleFormControlInput1" placeholder="Konfirmasi password" name="password_confirmation">
                    </div>
                  <div class="mb-2">
                    <button class="btn btn-warning text-white" type="submit">Daftar</button>
                  </div>
              </form>
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
