@extends('layouts.app')

@section('content')
<div class="container col-md-8">
  <h2>Form Barang</h2>
  <form>
    <div class="form-group mt-3">
      <label for="nama_barang">Nama Barang:</label>
      <input type="text" class="form-control" id="nama_barang" placeholder="Masukkan Nama Barang">
    </div>
    <div class="form-group mt-3">
      <label for="kode_barang">Kode Barang:</label>
      <input type="text" class="form-control" id="kode_barang" placeholder="Masukkan Kode Barang">
    </div>
    <div class="form-group mt-3">
      <label for="harga_barang">Harga Barang:</label>
      <input type="number" class="form-control" id="harga_barang" placeholder="Masukkan Harga Barang">
    </div>
    <div class="form-group mt-3">
      <label for="deskripsi_barang">Deskripsi Barang:</label>
      <textarea class="form-control" id="deskripsi_barang" rows="3" placeholder="Masukkan Deskripsi Barang"></textarea>
    </div>
    <div class="form-group mt-3 mb-3">
      <label for="satuan_barang">Satuan Barang:</label>
      <input type="text" class="form-control" id="satuan_barang" placeholder="Masukkan Satuan Barang">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
@endsection