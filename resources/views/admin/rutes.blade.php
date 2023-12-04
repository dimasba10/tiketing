@extends('layouts.main')
@section('container')

<div class="content">
  <h2>RUTES</h2>
  <table class="table table-striped table-hover">
    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#rutes">Tambah Rute</button>
    <table class="table table-light table-bordered table-hover text-center my-2">
  <tr>
    <th>No</th>
    <th>ID Rute</th>
    <th>Tujuan</th>
    <th>Rute Awal</th>
    <th>Rute Akhir</th>
    <th>Harga</th>
    <th>Nama Kereta</th>
    <th>Opsi</th>
  </tr>
  <tbody>
    <?php $i = 1;?>
    @foreach ($dtrutes as $rutes)
    <tr>
        <th>{{ $i }}</th>
        <th>{{ $rutes->id_rute }}</th>
        <th>{{ $rutes->tujuan }}</th>
        <th>{{ $rutes->rute_awal }}</th>
        <th>{{ $rutes->rute_akhir }}</th>
        <th>{{ $rutes->harga }}</th>
        <th>{{ $rutes->transportasi->keterangan }}</th>
        <td>
            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editrutes{{$rutes->id_rute }}"><i class="bi bi-pencil-fill"></i></button>
            <form class="d-inline" action="{{'rutes/' .$rutes->id_rute }}" method="POST">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger"><i class="bi bi-trash3-fill"></i></button>
        </form>
        </td>
        <?php $i++; ?>
    </tr>
     {{-- Form Edit Start --}}
     <div class="modal fade" id="editrutes{{$rutes->id_rute}}" tabindex="-1" aria-labelledby="editrutes" aria-hidden="true">
      <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
          <h1 class="modal-title fs-5" id="editrutes">Edit Data</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <form action="{{route('rutes.update', $rutes->id_rute)}}" method="POST">
                  @csrf
                  <div class="mb-3">
                    <label class="form-label" for="id_rute">ID Rute</label>
                    <input type="id_rute" class="form-control" id="id_rute" name="id_rute" value="{{$rutes->id_rute}}" readonly>
                  </div>
                  <div class="mb-3">
                      <label class="form-label" for="tujuan">Tujuan</label>
                      <input type="tujuan" class="form-control" id="tujuan" name="tujuan" value="{{$rutes->tujuan}}">
                  </div>
                  <div class="mb-3">
                      <label class="form-label" for="rute_awal">Rute Awal</label>
                      <input type="rute_awal" class="form-control" id="rute_awal" name="rute_awal" value="{{$rutes->rute_awal}}">
                  </div>
                  <div class="mb-3">
                      <label class="form-label" for="rute_akhir">Rute Akhir</label>
                      <input type="rute_akhir" class="form-control" id="rute_akhir" name="rute_akhir" value="{{$rutes->rute_akhir}}">
                  </div>
                  <div class="mb-3">
                      <label class="form-label" for="harga">Harga</label>
                      <input type="harga" class="form-control" id="harga" name="harga" value="{{$rutes->harga}}">
                  </div>
                  <div class="mb-3">
                      <label class="form-label" for="id_transportasi">ID Transportasi</label>
                      <select name="id_transportasi" id="id_transportasi" class="form-control">
                        @foreach ($transportasi as $item)
                            <option value="{{ $item->id_transportasi }}">{{ $item->keterangan }}</option>
                        @endforeach
                      </select>
                  </div>
                      <div class="modal-footer">
                          @method('PUT')
                              <input class="btn btn-warning" type="submit" value="Simpan">
                              <input class="btn btn-danger" type="reset" value="Reset">
                      </div>
              </form>
          </div>
      </div>
      </div>
  </div>
     {{-- Form Edit End --}}
    @endforeach
</tbody>
</table>
{{-- Form Tambah Start --}}
<div class="modal fade" id="rutes" tabindex="-1" aria-labelledby="rutes" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="rutes">Tambah Data</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="rutes" method="POST">
          @csrf
            <div class="mb-3">
              <label for="tujuan" class="form-label">Tujuan</label>
              <input type="integer" id="tujuan" name="tujuan" class="form-control" placeholder="">
            </div>
            <div class="mb-3">
              <label for="rute_awal" class="form-label">Rute Awal</label>
              <input type="string" id="rute_awal" name="rute_awal" class="form-control" placeholder="">
            </div>
            <div class="mb-3">
              <label for="rute_akhir" class="form-label">Rute Akhir</label>
              <input type="string" id="rute_akhir" name="rute_akhir" class="form-control" placeholder="">
            </div>
            <div class="mb-3">
              <label for="harga" class="form-label">Harga</label>
              <input type="string" id="harga" name="harga" class="form-control" placeholder="">
            </div>
            <div class="mb-3">
              <label for="keterangan" class="form-label">Keterangan</label>
              <select name="id_transportasi" id="keterangan" class="form-control">
                @foreach ($transportasi as $item)
                  <option value="{{ $item->id_transportasi }}" >{{ $item->keterangan }}</option>
                @endforeach
              </select>
            </div>
      </div>

      <div class="modal-footer">
        <tr>
          <td>
            <input type="reset" class="btn btn-danger" value="Reset">
            <input type="submit" class="btn btn-primary" value="Simpan">
          </td>
        </tr>
      </div>
    </form>
{{-- Form Tambah End --}}
    
@endsection