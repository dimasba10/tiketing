@extends('layouts.main')
@section('container')

<div class="content">
  <h2>TRANSPORTASI</h2>
  <table class="table table-striped table-hover">
    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#transportasi">Tambah Transportasi</button>
    <table class="table table-light table-bordered table-hover text-center my-2">
  <tr>
    <th>No</th>
    <th>Kode</th>
    <th>Jumlah Kursi</th>
    <th>Keterangan</th>
    <th>ID Type Transportasi</th>
    <th>Opsi</th>
  </tr>
  <tbody>
    <?php $i = 1;?>
    @foreach ($dttransportasi as $transportasi)
    <tr>
        <th>{{ $i }}</th>
        <th>{{ $transportasi->kode }}</th>
        <th>{{ $transportasi->jumlah_kursi }}</th>
        <th>{{ $transportasi->keterangan }}</th>
        <th>{{ $transportasi->type->nama_type }}</th>
        <td>
            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#edittransportasi{{$transportasi->id_transportasi }}"><i class="bi bi-pencil-fill"></i></button>
            <form class="d-inline" action="{{ 'transportasi/' .$transportasi->id_transportasi }}" method="POST">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger"><i class="bi bi-trash3-fill"></i></button>
        </form>
        </td>
        <?php $i++; ?>
    </tr>
    {{-- Form Edit Start --}}
    <div class="modal fade" id="edittransportasi{{$transportasi->id_transportasi}}" tabindex="-1" aria-labelledby="edittransportasi" aria-hidden="true">
      <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
          <h1 class="modal-title fs-5" id="edittransportasi">Edit Data</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <form action="{{route('transportasi.update', $transportasi->id_transportasi)}}" method="POST">
                  @csrf
                  <div class="mb-3">
                      <label class="form-label" for="jumlah_kursi">Jumlah Kursi</label>
                      <input type="jumlah_kursi" class="form-control" id="jumlah_kursi" name="jumlah_kursi" value="{{$transportasi->jumlah_kursi}}">
                  </div>
                  <div class="mb-3">
                      <label class="form-label" for="keterangan">Keterangan</label>
                      <input type="keterangan" class="form-control" id="keterangan" name="keterangan" value="{{$transportasi->keterangan}}">
                  </div>
                  <div class="mb-3">
                      <label class="form-label" for="id_type_transportasi">ID Type Transportasi</label>
                      <select name="id_type_transportasi" id="id_type_transportasi" class="form-control">
                        @foreach ($type1 as $item)
                            <option value="{{ $item->id_type_transportasi }}">{{ $item->nama_type }}</option>
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
<div class="modal fade" id="transportasi" tabindex="-1" aria-labelledby="transportasi" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="transportasi">Tambah Data</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="transportasi" method="POST">
          @csrf
            <div class="mb-3">
              <label for="jumlah_kursi" class="form-label">Jumlah Kursi</label>
              <input type="integer" id="jumlah_kursi" name="jumlah_kursi" class="form-control" placeholder="">
            </div>
            <div class="mb-3">
              <label for="keterangan" class="form-label">Keterangan</label>
              <input type="string" id="keterangan" name="keterangan" class="form-control" placeholder="">
            </div>
            <div class="mb-3">
              <label for="nama_type" class="form-label">ID Type Transportasi</label>
              <select name="nama_type" id="nama_type" class="form-control">
                @foreach ($type1 as $item)
                    <option value="{{ $item->nama_type }}">{{ $item->nama_type }}</option>
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