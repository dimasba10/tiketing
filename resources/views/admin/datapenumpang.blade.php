@extends('layouts.main')
@section('container')
<div class="content">
  <h2>Data Penumpang</h2>
  <table class="table table-striped table-hover">
    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#datapenumpang">Tambah Data</button>
    <table class="table table-light table-bordered table-hover text-center my-2">
  <tr>
    <th>No</th>
    <th>ID Penumpang</th>
    <th>Nama</th>
    <th>Alamat</th>
    <th>Tanggal Lahir</th>
    <th>Jenis Kelamin</th>
    <th>Telefon</th>
    <th>Opsi</th>
  </tr>
  <tbody>
    <?php $i = 1;?>
    @foreach ($dtpenumpang as $penumpang)
    <tr>
        <th>{{ $i }}</th>
        <th>{{ $penumpang->id_penumpang }}</th>
        <th>{{ $penumpang->nama_penumpang }}</th>
        <th>{{ $penumpang->alamat_penumpang }}</th>
        <th>{{ $penumpang->tanggal_lahir }}</th>
        <th>{{ $penumpang->jenis_kelamin }}</th>
        <th>{{ $penumpang->telefon }}</th>
        <td>
            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editpenumpang{{$penumpang->id_penumpang }}"><i class="bi bi-pencil-fill"></i></button>
            <form class="d-inline" action="{{'datapenumpang/' .$penumpang->id_penumpang }}" method="POST">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger"><i class="bi bi-trash3-fill"></i></button>
        </form>
        </td>
        <?php $i++; ?>
    </tr>
    {{-- Form Edit Start --}}
    <div class="modal fade" id="editpenumpang{{$penumpang->id_penumpang}}" tabindex="-1" aria-labelledby="editpenumpang" aria-hidden="true">
      <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
          <h1 class="modal-title fs-5" id="editpenumpang">Edit Data</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <form action="{{route('datapenumpang.update', $penumpang->id_penumpang)}}" method="POST">
                  @csrf
                  <div class="mb-3">
                      <label class="form-label" for="id_penumpang">ID Penumpang</label>
                      <input type="integer" class="form-control" id="id_penumpang" name="id_penumpang" value="{{$penumpang->id_penumpang}}" readonly>
                  </div>
                  <div class="mb-3">
                      <label class="form-label" for="username">Username</label>
                      <input type="string" class="form-control" id="username" name="username" value="{{$penumpang->username}}">
                  </div>
                  <div class="mb-3">
                      <label class="form-label" for="password">Password</label>
                      <input type="password" class="form-control" id="password" name="password" value="{{$penumpang->password}}" readonly>
                  </div>
                  <div class="mb-3">
                      <label class="form-label" for="nama_penumpang">Nama</label>
                      <input type="string" class="form-control" id="nama_penumpang" name="nama_penumpang" value="{{$penumpang->nama_penumpang}}">
                  </div>
                  <div class="mb-3">
                      <label class="form-label" for="alamat_penumpang">Alamat</label>
                      <input type="string" class="form-control" id="alamat_penumpang" name="alamat_penumpang" value="{{$penumpang->alamat_penumpang}}">
                  </div>
                  <div class="mb-3">
                      <label class="form-label" for="tanggal_lahir">Tanggal Lahir</label>
                      <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="{{$penumpang->tanggal_lahir}}">
                  </div>
                  <div class="mb-3">
                    <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                    <select class="form-select" id="jenis_kelamin" name="jenis_kelamin" aria-label="Default select example" required value="{{$penumpang->jenis_kelamin}}">
                    <option name="jenis_kelamin" value="L">L</option>
                    <option name="jenis_kelamin" value="P">P</option>
                    </select>
                </div>
                  <div class="mb-3">
                      <label class="form-label" for="telefon">Telefon</label>
                      <input type="string" class="form-control" id="telefon" name="telefon" value="{{$penumpang->telefon}}">
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
<div class="modal fade" id="datapenumpang" tabindex="-1" aria-labelledby="datapenumpang" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="datapenumpang">Tambah Data</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="datapenumpang" method="POST">
          @csrf
            <div class="mb-3">
              <label for="username" class="form-label">Username</label>
              <input type="string" id="username" name="username" class="form-control" placeholder="">
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" id="password" name="password" class="form-control" placeholder="">
            </div>
            <div class="mb-3">
              <label for="nama_penumpang" class="form-label">Nama</label>
              <input type="string" id="nama_penumpang" name="nama_penumpang" class="form-control" placeholder="">
            </div>
            <div class="mb-3">
              <label for="alamat_penumpang" class="form-label">Alamat</label>
              <input type="string" id="alamat_penumpang" name="alamat_penumpang" class="form-control" placeholder="">
            </div>
            <div class="mb-3">
              <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
              <input type="date" id="tanggal_lahir" name="tanggal_lahir" class="form-control" placeholder="">
            </div>
            <div class="mb-3">
              <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
              <select class="form-select" id="jenis_kelamin" name="jenis_kelamin" aria-label="Default select example" required>
              <option name="jenis_kelamin" value="L">L</option>
              <option name="jenis_kelamin" value="P">P</option>
              </select>
          </div>
            <div class="mb-3">
              <label for="telefon" class="form-label">Telefon</label>
              <input type="integer" id="telefon" name="telefon" class="form-control" placeholder="">
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
