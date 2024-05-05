@extends('layouts.app')

@section('content')
<div class="container col-md-8">
    <h2>List Barang</h2>
    <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">Nama Barang</th>
        <th scope="col">Kode Barang</th>
        <th scope="col">Harga Barang</th>
        <th scope="col">Deskripsi Barang</th>
        <th scope="col">Satuan Barang</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Barang A</td>
        <td>KD001</td>
        <td>10000</td>
        <td>Deskripsi Barang A</td>
        <td>PCS</td>
        <td>Edit</td>
      </tr>
      <tr>
        <td>Barang B</td>
        <td>KD002</td>
        <td>15000</td>
        <td>Deskripsi Barang B</td>
        <td>PCS</td>
        <td>Edit</td>
      </tr>
      <tr>
        <td>Barang C</td>
        <td>KD003</td>
        <td>20000</td>
        <td>Deskripsi Barang C</td>
        <td>PCS</td>
        <td>Edit</td>
      </tr>
      <!-- Tambahkan baris sesuai dengan data barang yang Anda miliki -->
    </tbody>
  </table>
</div>

@endsection