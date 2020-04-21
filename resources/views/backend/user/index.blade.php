@extends('backend.layouts.master')

@section('content')
<div class="col-12">
  <div class="card card-flat">
    <div class="card-header">
      <h4 class="card-title">
        <i class="fa fa-user"></i> &ensp;
        Data User
      </h4>
    </div>
    <div class="card-body">
      <div class="row mb-3">
        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 mt-2">
          <button class="btn btn-outline-primary btn-block btn-sm"> 
            FILTER
          </button>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 mt-2">
          <form class="form">
            <div class="input-group input-group-sm"> 
              <input class="form-control form-control-secondary" type="search" placeholder="Cari Data User.." aria-label="Search"> 
              <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="submit">
                  <i class="fas fa-search"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 mt-2">
          <a href="{{ route('user.create') }}" class="btn btn-primary btn-sm btn-block">
            <i class="fa fa-plus"></i> &ensp;
            Data User Baru
          </a>
        </div>
      </div>
      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th>#</th>
              <th>Nama</th>
              <th>E-Mail</th>
              <th class="text-center">Level Akses</th>
              <th class="text-center">Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($user as $item)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->email }}</td>
                <td class="text-center">{{ $item->roles->first()->name }}</td>
                <td class="text-center" width="20%">
                  <div class="btn-group">
                    <a href="#" class="btn btn-sm btn-outline-info btn-flat ml-1" title="Detail Data User">
                      <i class="fa fa-user"></i>
                    </a>
                    <a href="#" class="btn btn-sm btn-outline-warning btn-flat ml-1" title="Ubah Data User">
                      <i class="fa fa-edit"></i>
                    </a>
                    <a href="#" class="btn btn-sm btn-outline-danger btn-flat ml-1" title="Hapus Data User">
                      <i class="fa fa-trash"></i>
                    </a>
                  </div> 
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection