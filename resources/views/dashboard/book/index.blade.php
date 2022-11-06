@extends('dashboard.layouts.main')

@section('head')
    <title>Daftar Buku</title>
@endsection

@section('content')
     <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Buku</h1>
     </div>
     @include('dashboard.components.alert')
     <a href="/dashboard/book/create" class="btn btn-success mt-3 mb-4">Tambah Buku</a>
     <table class="table table-bordered">
          <thead>
               <tr class="table-light">
                    <th scope="col">No</th>
                    <th scope="col">Kode</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Penulis</th>
                    <th scope="col">Penerbit</th>
                    <th scope="col">Tahun</th>
                    <th scope="col">Tebal</th>
                    <th scope="col">Aksi</th>
               </tr>
          </thead>
          <tbody>
               @foreach ($book as $bk)
               <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $bk->kode }}</td>
                    <td>{{ $bk->category->nama }}</td>
                    <td>{{ $bk->nama }}</td>
                    <td>{{ $bk->penulis }}</td>
                    <td>{{ $bk->penerbit }}</td>
                    <td>{{ $bk->tahun }}</td>
                    <td>{{ $bk->tebal }}</td>
                    <td>
                         <a class="badge bg-primary" href="/dashboard/book/{{ $bk->id }}/edit"><i class="bi bi-pencil-fill"></i></a>
                         <form class="d-inline" action="/dashboard/book/{{ $bk->id }}" method="post">
                              @csrf @method('delete')
                              <button class="badge bg-danger border-0" onclick="return confirm('Yakin untuk menghapus data?\nTransaksi yang berkaitan akan dihapus!')"><i class="bi bi-trash-fill"></i></button>
                         </form>
                    </td>
               </tr>
               @endforeach
          </tbody>
     </table>
@endsection