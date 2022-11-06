@extends('dashboard.layouts.main')

@section('head')
    <title>Edit Kategori</title>
@endsection

@section('content')
     <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Edit Kategori</h1>
     </div>

     <form action="/dashboard/category/{{ $category->id }}" method="post" class="row g-3 col-lg-8">
          @csrf @method('put')
          <div class="col-md-6">
               <label for="nama" class="form-label">Nama</label>
               <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" id="nama" value="{{ old('nama', $category->nama) }}" required>
               @error('nama')
                    <div class="invalid-feedback">
                         <i class="bx bx-radio-circle"></i>
                         {{ $message }}
                    </div>     
               @enderror
          </div>
          <div class="col-12 mt-4">
               <button type="submit" class="btn btn-primary">Edit Buku</button>
          </div>
     </form>
@endsection