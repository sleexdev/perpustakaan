@extends('dashboard.layouts.main')

@section('head')
    <title>Daftar Buku</title>
@endsection

@section('content')
     <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Kategori</h1>
     </div>
     @include('dashboard.components.alert')
     <a href="/dashboard/category/create" class="btn btn-success mt-3 mb-4">Tambah Kategori</a>
     <table class="table table-bordered">
          <thead>
               <tr class="table-light">
                    <th scope="col">No</th>
                    <th scope="col">Nama Kategori</th>
                    <th scope="col">Aksi</th>
               </tr>
          </thead>
          <tbody>
               @foreach ($category as $ctg)
               <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $ctg->nama }}</td>
                    <td>
                         <a class="badge bg-primary" href="/dashboard/category/{{ $ctg->id }}/edit"><i class="bi bi-pencil-fill"></i></a>
                         <form class="d-inline" action="/dashboard/category/{{ $ctg->id }}" method="post">
                              @csrf @method('delete')
                              <button class="badge bg-danger border-0" onclick="return confirm('Yakin untuk menghapus data?')"><i class="bi bi-trash-fill"></i></button>
                         </form>
                    </td>
               </tr>
               @endforeach
          </tbody>
     </table>
@endsection