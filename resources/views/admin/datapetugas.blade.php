@extends('layouts.main')
@section('container')
<section class="ftco-section" id="">
  <div class="container">
      <div class="container mt-5">
              <h2 class="text-center">PETUGAS</h2>
          </div>
      </div>
      <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#petugas">Tambah Petugas</button>
      <table class="table table-light table-bordered table-hover text-center my-2">
                      <tr>
                          <th>No</th>
                          <th>ID Petugas</th>
                          <th>Nama Petugas</th>
                          <th>ID Level</th>
                          <th>Opsi</th>
                      </tr>
                      <tbody>
                          <?php $i = 1;?>
                          @foreach ($dtpetugas as $petugas)
                          <tr>
                              <th>{{ $i }}</th>
                              <th>{{ $petugas->id_petugas }}</th>
                              <th>{{ $petugas->nama_petugas }}</th>
                              <th>{{ $petugas->id_level }}</th>
                              <td>
                                  <button type="button"  class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editpetugas{{ $petugas->id_petugas }}"><i class="bi bi-pencil-fill"></i></button>
                                  <form class="d-inline" action="{{ 'datapetugas/' .$petugas->id_petugas }}" method="POST">
                                  @csrf
                                  @method('DELETE')
                                  <button class="btn btn-danger"><i class="bi bi-trash3-fill"></i></button>
                              </form>
                              </td>
                              <?php $i++; ?>
                          </tr> 
                          {{-- Modal Edit --}}
                      <div class="modal fade" id="editpetugas{{$petugas->id_petugas}}" tabindex="-1" aria-labelledby="editpetugas" aria-hidden="true">
                          <div class="modal-dialog">
                          <div class="modal-content">
                              <div class="modal-header">
                              <h1 class="modal-title fs-5" id="editpetugas">Edit Data</h1>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                  <form action="{{route('datapetugas.update', $petugas->id_petugas)}}" method="POST">
                                      @csrf
                                      
                                      <div class="mb-3">
                                          <label class="form-label" for="id_petugas">ID Petugas</label>
                                          <input type="integer" class="form-control" id="id_petugas" name="id_petugas" value="{{$petugas->id_petugas}}" readonly>
                                      </div>
                                      <div class="mb-3">
                                          <label class="form-label" for="username">Username</label>
                                          <input type="username" class="form-control" id="username" name="username" value="{{$petugas->username}}">
                                      </div>
                                      <div class="mb-3">
                                          <label class="form-label" for="password">Password</label>
                                          <input type="password" class="form-control" id="password" name="password" value="{{$petugas->password}}" readonly>
                                      </div>
                                      <div class="mb-3">
                                          <label class="form-label" for="nama_petugas">Nama Petugas</label>
                                          <input type="varchar" class="form-control" id="nama_petugas" name="nama_petugas" value="{{$petugas->nama_petugas}}">
                                      </div>
                                      <div class="mb-3">
                                          <label class="form-label" for="id_level">Level</label>
                                          <select name="id_level" id="id_level" class="form-control" value="{{ $petugas->id_level }}" >
                                          <option name="id_level" value="1">Administrator</option>
                                          <option name="id_level" value="2">Petugas</option>
                                          <option name="id_level" value="3">Penumpang</option>
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
                          @endforeach
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
  </div>
</section>
<!-- Modal -->
<div class="modal fade" id="petugas" tabindex="-1" aria-labelledby="petugas" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="petugas">Tambah Data</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      {{-- Form Petugas Start--}}
      <div class="modal-body">
        <form action="datapetugas" method="POST">
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
              <label for="nama_petugas" class="form-label">Nama Petugas</label>
              <input type="string" id="nama_petugas" name="nama_petugas" class="form-control" placeholder="">
            </div>
            <div class="mb-3">
              <label for="id_level" class="form-label">Level</label>
              <select class="form-select" id="id_level" name="id_level" aria-label="Default select example" required>
              <option name="id_level" value="1">Administrator</option>
              <option name="id_level" value="2">Petugas</option>
              <option name="id_level" value="3">Penumpang</option>
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
    {{-- Form Petugas End --}}
    </div>
  </div>
</div>


@endsection