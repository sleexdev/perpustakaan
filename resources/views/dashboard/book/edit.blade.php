@extends('dashboard.layouts.main')

@section('head')
    <title>Edit Buku</title>
@endsection

@section('content')
     <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Edit Buku</h1>
     </div>

     <form action="/dashboard/book/{{ $book->id }}" method="post" class="row g-3 col-lg-8">
          @csrf @method('put')
          <div class="col-md-3">
               <label for="kode" class="form-label">Kode</label>
               <input type="text" class="form-control @error('kode') is-invalid @enderror" name="kode" id="kode" value="{{ old('kode', $book->kode) }}" required>
               @error('kode')
                    <div class="invalid-feedback">
                         <i class="bx bx-radio-circle"></i>
                         {{ $message }}
                    </div>     
               @enderror
          </div>
          <div class="col-md-3">
               <label for="category_id" class="form-label">Kategori</label>
               <select class="form-select @error('category_id') is-invalid @enderror" name="category_id" id="category_id" required>
                    @foreach ($category as $ctg)
                         @if(old('category_id', $book->category_id) == $ctg->id )
                              <option value="{{ $ctg->id }}" selected >{{ $ctg->nama }}</option>
                         @else
                              <option value="{{ $ctg->id }}">{{ $ctg->nama }}</option>
                         @endif
                    @endforeach
               </select>
               @error('category_id')
                    <div class="invalid-feedback">
                         <i class="bx bx-radio-circle"></i>
                         {{ $message }}
                    </div>     
               @enderror
          </div>
          <div class="col-md-6">
               <label for="nama" class="form-label">Nama</label>
               <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" id="nama" value="{{ old('nama', $book->nama) }}" required>
               @error('nama')
                    <div class="invalid-feedback">
                         <i class="bx bx-radio-circle"></i>
                         {{ $message }}
                    </div>     
               @enderror
          </div>
          <div class="col-md-6">
               <label for="penulis" class="form-label">Penulis</label>
               <input type="text" class="form-control @error('penulis') is-invalid @enderror" name="penulis" id="penulis" value="{{ old('penulis', $book->penulis) }}">
               @error('penulis')
                    <div class="invalid-feedback">
                         <i class="bx bx-radio-circle"></i>
                         {{ $message }}
                    </div>     
               @enderror
          </div>
          <div class="col-md-6">
               <label for="penerbit" class="form-label">Penerbit</label>
               <input type="text" class="form-control @error('penerbit') is-invalid @enderror" name="penerbit" id="penerbit" value="{{ old('penerbit', $book->penerbit) }}">
               @error('penerbit')
                    <div class="invalid-feedback">
                         <i class="bx bx-radio-circle"></i>
                         {{ $message }}
                    </div>     
               @enderror
          </div>
          <div class="col-md-6">
               <label for="tahun" class="form-label">Tahun</label>
               <input type="text" class="form-control @error('tahun') is-invalid @enderror" name="tahun" id="tahun" value="{{ old('tahun', $book->tahun) }}">
               @error('tahun')
                    <div class="invalid-feedback">
                         <i class="bx bx-radio-circle"></i>
                         {{ $message }}
                    </div>     
               @enderror
          </div>
          <div class="col-md-6">
               <label for="tebal" class="form-label">Tebal</label>
               <input type="text" class="form-control @error('tebal') is-invalid @enderror" name="tebal" id="tebal" value="{{ old('tebal', $book->tebal) }}">
               @error('tebal')
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