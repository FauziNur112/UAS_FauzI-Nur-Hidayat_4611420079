@extends('layouts.main')

    @section('konten')
    <div class="container-md">
        <h2>Perpus Uas</h2>
    </div>

    <div class="container-sm tabledata card border-0 shadow rounded p-3">
        <form action="{{ route('simpanbuku') }}" method="post">
            @csrf

        <div class="form-group mb-3">
            <label for="buku_id" class="form-label">ID Buku</label>
            <input type="id" name="buku_id" class="form-control" placeholder="Id buku" >
          </div>

          <div class="form-group mb-3">
            <label for="judul" class="form-label">Judul</label>
            <input type="judul" name="judul" class="form-control" placeholder="Judul" >
          </div>
{{--
          <div class="form-group mb-3">
            <label for="penulis" class="form-label">Penulis</label>
            <input type="penulis" name="penulis" class="form-control" value"">
          </div>

          <div class="form-group mb-3">
            <label for="penulis" class="form-label">Penerbit</label>
            <input type="penulis" name="penulis" class="form-control" placeholder="Penerbit" value="">
          </div> --}}

          <div class="form-group mb-3">
            <label for="tahun_terbit" class="form-label">Tahun Terbit</label>
            <input type="date" name="tahun_terbit" class="form-control" placeholder="Tahun terbit" >
          </div>


          <div class="form-group mb-3">
            <label for="jumlah_stok" class="form-label">Jumlah Stok</label>
            <input type="jumlah_stok" name="jumlah_stok" class="form-control" placeholder="Jumlah" >
          </div>

          <div class="form-group mb-3">
            <label for="denda_buku" class="form-label">Denda Buku</label>
            <input type="denda_buku" name="denda_buku" class="form-control" placeholder="Denda" >
          </div>





          <div class="form-group mb-3">
                <button type="submit" class="btn btn-success"> Ubah Data </button>
          </div>

        </form>

    </div>


    @endsection
