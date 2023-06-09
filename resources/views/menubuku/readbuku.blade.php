@extends('layouts.main')

    @section('konten')
    <div class="container2">
        <h2>Perpus Uas</h2>
    </div>

    <div class="tabledata card border-0 shadow rounded p-3">



            <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-4">
                <a href="{{ route('buatbuku') }}" class="btn btn-success">Tambah Buku<i class="fas fa-plus-square"></i></a>
              </div>

        <table class="table table-striped">
{{-- Judul
Penulis
 Penerbit
TahunTerbit
 JumlahStok --}}

            <thead>
              <tr>
                <th scope="col">ID Buku</th>
                <th scope="col">Judul</th>
                <th scope="col">Penulis</th>
                <th scope="col">Penerbit</th>
                <th scope="col">Tahun Terbit</th>
                <th scope="col">Jumlah Stok</th>
                <th scope="col">Denda Buku</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($dapus as $item)
              <tr>
                <td>{{ $item->buku_id }}</td>
                <td>{{ $item->judul }}</td>
                <td>{{ $item->author_id }}</td>
                <td>{{ $item->penerbit->penerbit }}</td>
                <td>{{ $item->tahun_terbit }}</td>
                <td>{{ $item->jumlah_stok }}</td>
                <td>{{ $item->denda_buku }}</td>
                <td > <a href="{{ route('editbuku', $item->id) }}"> Edit </a> | <a href="{{ route('hapusbuku', $item->id) }}"> Delete </a> </td>
              </tr>

              @endforeach
            </tbody>
          </table>
    </div>


    @endsection
