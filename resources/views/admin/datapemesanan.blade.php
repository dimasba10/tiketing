@extends('layouts.main')
@section('container')

<div class="content">
    <h2>Data Pemesanan</h2>
    <table class="table table-striped table-hover">
    <tr>
      <th>No</th>
      <th>ID Pemesanan</th>
      <th>Kode Pemesanan</th>
      <th>Tanggal Pemesanan</th>
      <th>Tempat Pemesanan</th>
      <th>Nama Penumpang</th>
      <th>Kode Kursi</th>
      <th>ID Rute</th>
      <th>Tujuan</th>
      <th>Tanggal Berangkat</th>
      <th>Jam Cekin</th>
      <th>Jam Berangkat</th>
      <th>Total Bayar</th>
      <th>Nama Petugas</th>
      <th>Opsi</th>
    </tr>
    <tbody>
      <?php $i = 1;?>
      @foreach ($dtpemesanan as $pemesanan)
      <tr>
          <th>{{ $i }}</th>
          <th>{{ $pemesanan->id_pemesanan }}</th>
          <th>{{ $pemesanan->kode_pemesanan }}</th>
          <th>{{ $pemesanan->tanggal_pemesanan }}</th>
          <th>{{ $pemesanan->tempat_pemesanan }}</th>
          <th>{{ $pemesanan->penumpang->nama_penumpang }}</th>
          <th>{{ $pemesanan->kode_kursi }}</th>
          <th>{{ $pemesanan->id_rute }}</th>
          <th>{{ $pemesanan->tujuan }}</th>
          <th>{{ $pemesanan->tanggal_berangkat }}</th>
          <th>{{ $pemesanan->jam_cekin }}</th>
          <th>{{ $pemesanan->jam_berangkat }}</th>
          <th>{{ $pemesanan->total_bayar }}</th>
          <th>{{ $pemesanan->petugas->nama_petugas }}</th>
          <td>
            <form class="d-inline" action="{{'datapemesanan/' .$pemesanan->id_pemesanan }}" method="POST">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger"><i class="bi bi-trash3-fill"></i></button>
        </form>
        </td>
          <?php $i++; ?>
      </tr>
    @endforeach
  </tbody>
</table>
    
@endsection