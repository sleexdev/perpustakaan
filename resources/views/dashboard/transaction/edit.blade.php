@extends('dashboard.layouts.main')

@section('head')
    <title>Edit Transaksi</title>
@endsection

@section('content')
     <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Edit Transaksi</h1>
     </div>

     <form action="/dashboard/transaction/{{ $transaction->id }}" method="post" class="row g-3 col-lg-8">
          @csrf @method('put')
          <div class="col-md-6">
               <label for="kode_member" class="form-label">Member</label>
               <select class="form-select @error('kode_member') is-invalid @enderror" name="kode_member" id="kode_member" required>
                    @foreach ($member as $mb)
                         @if(old('kode_member', $transaction->kode_member) == $mb->kode_member )
                              <option value="{{ $mb->kode_member }}" selected >{{ $mb->nama }}</option>
                         @else
                              <option value="{{ $mb->kode_member }}">{{ $mb->nama }}</option>
                         @endif
                    @endforeach
               </select>
               @error('kode_member')
                    <div class="invalid-feedback">
                         <i class="bx bx-radio-circle"></i>
                         {{ $message }}
                    </div>     
               @enderror
          </div>
          <div class="col-md-6">
               <label for="book_id" class="form-label">Buku</label>
               <select class="form-select @error('book_id') is-invalid @enderror" name="book_id" id="book_id" required>
                    @foreach ($book as $bk)
                         @if(old('book_id', $transaction->book_id) == $bk->id )
                              <option value="{{ $bk->id }}" selected >{{ $bk->nama }}</option>
                         @else
                              <option value="{{ $bk->id }}">{{ $bk->nama }}</option>
                         @endif
                    @endforeach
               </select>
               @error('book_id')
                    <div class="invalid-feedback">
                         <i class="bx bx-radio-circle"></i>
                         {{ $message }}
                    </div>     
               @enderror
          </div>
          <div class="col-md-6">
               <label for="tgl_pinjam" class="form-label">Tanggal Pinjam</label>
               <input type="date" class="form-control @error('tgl_pinjam') is-invalid @enderror" name="tgl_pinjam" id="tgl_pinjam" value="{{ old('tgl_pinjam', $transaction->tgl_pinjam) }}" required>
               @error('tgl_pinjam')
                    <div class="invalid-feedback">
                         <i class="bx bx-radio-circle"></i>
                         {{ $message }}
                    </div>     
               @enderror
          </div>
          <div class="col-md-6">
               <label for="tgl_kembali" class="form-label">Tanggal Kembali</label>
               <input type="date" class="form-control @error('tgl_kembali') is-invalid @enderror" name="tgl_kembali" id="tgl_kembali" value="{{ old('tgl_kembali', $transaction->tgl_kembali) }}" required>
               @error('tgl_kembali')
                    <div class="invalid-feedback">
                         <i class="bx bx-radio-circle"></i>
                         {{ $message }}
                    </div>     
               @enderror
          </div>
          <div class="col-12 mt-4">
               <button type="submit" class="btn btn-primary">Edit Transaksi</button>
          </div>
     </form>
@endsection