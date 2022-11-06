@extends('dashboard.layouts.main')

@section('head')
    <title>Tambah Member</title>
@endsection

@section('content')
     <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Tambah Member</h1>
     </div>

     <form action="/dashboard/member" method="post" class="row g-3 col-lg-8">
          @csrf
          <div class="col-md-6">
               <label for="kode_member" class="form-label">Kode Member</label>
               <input type="text" class="form-control @error('kode_member') is-invalid @enderror" name="kode_member" id="kode_member" value="{{ old('kode_member') }}" required autofocus>
               @error('kode_member')
                    <div class="invalid-feedback">
                         <i class="bx bx-radio-circle"></i>
                         {{ $message }}
                    </div>     
               @enderror
          </div>
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
          <div class="col-md-6">
               <label for="ribath" class="form-label">Ribath</label>
               <input type="text" class="form-control @error('ribath') is-invalid @enderror" name="ribath" id="ribath" value="{{ old('ribath') }}">
               @error('ribath')
                    <div class="invalid-feedback">
                         <i class="bx bx-radio-circle"></i>
                         {{ $message }}
                    </div>     
               @enderror
          </div>
          <div class="col-md-6">
               <label for="kamar" class="form-label">Kamar</label>
               <input type="text" class="form-control @error('kamar') is-invalid @enderror" name="kamar" id="kamar" value="{{ old('kamar') }}">
               @error('kamar')
                    <div class="invalid-feedback">
                         <i class="bx bx-radio-circle"></i>
                         {{ $message }}
                    </div>     
               @enderror
          </div>
          <div class="col-md-6">
               <label for="sekolah" class="form-label">Sekolah</label>
               <input type="text" class="form-control @error('sekolah') is-invalid @enderror" name="sekolah" id="sekolah" value="{{ old('sekolah') }}">
               @error('sekolah')
                    <div class="invalid-feedback">
                         <i class="bx bx-radio-circle"></i>
                         {{ $message }}
                    </div>     
               @enderror
          </div>
          <div class="col-md-6">
               <label for="kelas" class="form-label">Kelas</label>
               <input type="text" class="form-control @error('kelas') is-invalid @enderror" name="kelas" id="kelas" value="{{ old('kelas') }}">
               @error('kelas')
                    <div class="invalid-feedback">
                         <i class="bx bx-radio-circle"></i>
                         {{ $message }}
                    </div>     
               @enderror
          </div>
          <div class="col-md-6">
               <label for="kelas_MHM" class="form-label">Kelas MHM</label>
               <input type="text" class="form-control @error('kelas_MHM') is-invalid @enderror" name="kelas_MHM" id="kelas_MHM" value="{{ old('kelas_MHM') }}">
               @error('kelas_MHM')
                    <div class="invalid-feedback">
                         <i class="bx bx-radio-circle"></i>
                         {{ $message }}
                    </div>     
               @enderror
          </div>
          <div class="col-12 mt-4">
               <button type="submit" class="btn btn-primary">Tambah Member</button>
          </div>
     </form>
@endsection