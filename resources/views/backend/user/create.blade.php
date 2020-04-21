@extends('backend.layouts.master')

@section('content')
<div class="col-12">
  <div class="card card-flat">
    <div class="card-header">
      <h4 class="card-title">
        <i class="fa fa-edit"></i> &ensp;
        Form Data User
      </h4>
    </div>
    <div class="card-body">
      <form action="{{ route('user.store') }}" method="post">
        @csrf
        <div class="row">
          <div class="col-md-6 col-lg-6">
            <div class="form-group">
              <label for="">Nama User : <i class="text-danger">*</i></label>
              <input type="text" name="name" id="name" class="form-control flat {{ $errors->has('name') ? 'is-invalid':'' }}" required autofocus value="{{ old('name') }}" placeholder="Masukan Nama User..">
              <small class="text-danger">
                {{ $errors->first('name') }}
              </small>
            </div>
          </div>
          <div class="col-md-6 col-lg-6"> 

          </div>
          <div class="col-md-6 col-lg-6"> 
            <div class="form-group">
              <label for="">E-Mail : <i class="text-danger">*</i></label>
              <input type="email" name="email" id="email" class="form-control flat {{ $errors->has('email') ? 'is-invalid':'' }}" required value="{{ old('email') }}" placeholder="Masukan Email User..">
              <small class="text-danger">
                {{ $errors->first('email') }}
              </small>
            </div> 
            <div class="form-group">
              <label for="">Level Akses : <i class="text-danger">*</i></label>
              <select name="role" id="role" class="form-control flat text-secondary" required>
                <option value="">Pilih Level Akses User..</option>
                @foreach ($role as $item)
                  <option value="{{ $item->name }}">{{ $item->name }}</option>
                @endforeach
              </select>
              <small class="text-danger">
                {{ $errors->first('role') }}
              </small>
            </div> 
          </div> 
          <div class="col-md-6 col-lg-6">
            <div class="form-group">
              <label for="">Password : <i class="text-danger">*</i></label>
              <input type="password" name="password" id="password" class="form-control flat {{ $errors->has('password') ? 'is-invalid':'' }}" required placeholder="Masukan Password User..">
              <small class="text-danger">
                {{ $errors->first('password') }}
              </small>
            </div>
            <div class="form-group">
              <label for="">Konfirmasi Password : <i class="text-danger">*</i></label>
              <input type="password" name="password_confirmation" id="password_confirmation" class="form-control flat {{ $errors->has('password_confirmation') ? 'is-invalid':'' }}" required placeholder="Masukan Ulang Password User..">
              <small class="text-danger">
                {{ $errors->first('password_confirmation') }}
              </small>
            </div>
          </div>
          <div class="col-12">
            <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 mt-2"> 
                <button type="submit" class="btn btn-success btn-sm flat btn-block">
                  <i class="fa fa-plus"></i> &ensp;
                  Tambah Data User
                </button>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 mt-2"> 
                <button type="reset" class="btn btn-danger btn-sm flat btn-block">
                  <i class="fa fa-undo"></i> &ensp;
                  Reset Input
                </button>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 mt-2"> 
                <a href="{{ route('user.index') }}" class="btn btn-outline-warning btn-sm flat btn-block">
                  <i class="fa fa-times"></i> &ensp;
                  Kembali
                </a>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection
