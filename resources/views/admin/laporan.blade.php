@extends('layouts.main')
@section('container')
<a href="cetak" target="_blank" class="btn btn-info btn-md">Cetak Pdf</a>
<div class="content">
    <div class="table table-striped table-hover">
          <table class="table table-light table-bordered table-hover text-center my-2">
                <thead class="table-light">
                  <tr class="table">
                    <th scope="col">No</th>
                    <th scope="col">Nama Penumpang</th>
                    <th scope="col">KD Pemesanan</th>
                    <th scope="col">KD Kursi</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Tempat</th>
                    <th scope="col">Tujuan</th>
                    <th scope="col">Tanggal Berangkat</th>
                    <th scope="col">Jam Cekin</th>
                    <th scope="col">Jam Berangkat</th>
                    <th scope="col">Total Bayar</th>
                    <th scope="col">Status</th>
                    <th scope="col">Opsi</th>
                  </tr>
                </thead>
                <tbody>
                    <?php $i = 1;?>
                    @foreach ($dtpemesanan as $pemesanan)
                        <tr>
                          <th>{{  $i }}</th>
                          <th>{{  $pemesanan->penumpang->nama_penumpang }}</th>
                          <th>{{  $pemesanan->kode_pemesanan }}</th>
                          <th>{{  $pemesanan->kode_kursi }}</th>
                          <th>{{  $pemesanan->tanggal_pemesanan }}</th>
                          <th>{{  $pemesanan->tempat_pemesanan }}</th>
                          <th>{{  $pemesanan->rute->tujuan }}</th> 
                          <th>{{  $pemesanan->tanggal_berangkat }}</th>
                          <th>{{  $pemesanan->jam_cekin }}</th>
                          <th>{{  $pemesanan->jam_berangkat }}</th>
                          <th>Rp. {{  $pemesanan->total_bayar }}</th>
                          @if ($pemesanan->status == 0)
                              <td>Belum Bayar</td>
                            @else
                                <td>Lunas</td>
                          @endif
                          <td>
                            <div>
                                <form action="{{ route('validasi.update', $pemesanan->id_pemesanan)}}" method="POST">
                                    @csrf
                                    @method('Patch')
                                    <button type="submit" class="btn btn-info">Validasi</button>
                                </form>
                            </div>
                          </td>
                          <?php $i++; ?>
                        </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
    </div>
@endsection