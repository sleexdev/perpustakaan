@extends('dashboard.layouts.main')

@section('head')
    <title>Daftar Member</title>
@endsection

@section('content')
     <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Member</h1>
     </div>
     @include('dashboard.components.alert')
     <a href="/dashboard/member/create" class="btn btn-success mt-3 mb-4">Tambah Member</a>
     <table class="table table-bordered">
          <thead>
               <tr class="table-light">
                    <th scope="col">No</th>
                    <th scope="col">Kode Member</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Ribath</th>
                    <th scope="col">Kamar</th>
                    <th scope="col">Sekolah</th>
                    <th scope="col">Kelas</th>
                    <th scope="col">Kelas MHM</th>
                    <th scope="col">Aksi</th>
               </tr>
          </thead>
          <tbody>
               @foreach ($member as $mb)
               <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $mb->kode_member }}</td>
                    <td>{{ $mb->nama }}</td>
                    <td>{{ $mb->ribath }}</td>
                    <td>{{ $mb->kamar }}</td>
                    <td>{{ $mb->sekolah }}</td>
                    <td>{{ $mb->kelas }}</td>
                    <td>{{ $mb->kelas_MHM }}</td>
                    <td>
                         <a class="badge bg-primary" href="/dashboard/member/{{ $mb->id }}/edit"><i class="bi bi-pencil-fill"></i></a>
                         <form class="d-inline" action="/dashboard/member/{{ $mb->id }}" method="post">
                              @csrf @method('delete')
                              <button class="badge bg-danger border-0" onclick="return confirm('Yakin untuk menghapus data?')"><i class="bi bi-trash-fill"></i></button>
                         </form>
                    </td>
               </tr>
               @endforeach
          </tbody>
     </table>
@endsection