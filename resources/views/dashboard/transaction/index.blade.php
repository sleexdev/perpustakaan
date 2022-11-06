@extends('dashboard.layouts.main')

@section('head')
    <title>Daftar Transaksi</title>
@endsection

@section('content')
     <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Transaksi</h1>
     </div>
     <a href="/dashboard/transaction/create" class="btn btn-success mt-3 mb-4">Tambah Transaksi</a>
     <table class="table table-bordered">
          <thead>
               <tr class="table-light">
                    <th scope="col">No</th>
                    <th scope="col">Kode Member</th>
                    <th scope="col">Buku</th>
                    <th scope="col">Tanggal Pinjam</th>
                    <th scope="col">Tanggal Kembali</th>
                    <th scope="col">Aksi</th>
               </tr>
          </thead>
          <tbody>
               @foreach ($transaction as $tr)
               <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>({{ $tr->kode_member }}) - {{ $tr->member->nama }}</td>
                    <td>({{ $tr->book_id }}) - {{ $tr->book->nama }}</td>
                    <td>{{ date('d-M-Y',strtotime($tr->tgl_pinjam)) }}</td>
                    <td>{{ date('d-M-Y',strtotime($tr->tgl_kembali)) }}</td>
                    <td>
                         <a class="badge bg-primary" href="/dashboard/transaction/{{ $tr->id }}/edit"><i class="bi bi-pencil-fill"></i></a>
                         <form class="d-inline" action="/dashboard/transaction/{{ $tr->id }}" method="post">
                              @csrf @method('delete')
                              <button class="badge bg-danger border-0" onclick="return confirm('Yakin untuk menghapus data?')"><i class="bi bi-trash-fill"></i></button>
                         </form>
                    </td>
               </tr>
               @endforeach
          </tbody>
     </table>
@endsection