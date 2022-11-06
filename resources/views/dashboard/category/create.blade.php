@extends('dashboard.layouts.main')

@section('head')
    <title>Tambah Kategori</title>
@endsection

@section('content')
     <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Tambah Kategori</h1>
     </div>

     <form action="/dashboard/category" method="post" class="row g-3 col-lg-8">
          @csrf
          <div class="col-md-6">
               <label for="nama" class="form-label">Nama</label>
               <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" id="nama" value="{{ old('nama') }}" required autofocus>
               @error('nama')
                    <div class="invalid-feedback">
                         <i class="bx bx-radio-circle"></i>
                         {{ $message }}
                    </div>     
               @enderror
          </div>
          <div class="col-12 mt-4">
               <button type="submit" class="btn btn-primary">Tambah Kategori</button>
          </div>
     </form>
@endsection