@extends('layouts.main')
@section('container')

<div class="content">
  <h2>TYPE TRANSPORTASI</h2>
  <table class="table table-striped table-hover">
    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#typetransportasi">Tambah Type</button>
    <table class="table table-light table-bordered table-hover text-center my-2">
  <tr>
    <th>No</th>
    <th>ID Type Transportasi</th>
    <th>Nama Type</th>
    <th>Keterangan</th>
    {{-- <th>Opsi</th> --}}
  </tr>
  <tbody>
    <?php $i = 1;?>
    @foreach ($dttypetransportasi as $typetransportasi)
    <tr>
        <th>{{ $i }}</th>
        <th>{{ $typetransportasi->id_type_transportasi }}</th>
        <th>{{ $typetransportasi->nama_type }}</th>
        <th>{{ $typetransportasi->keterangan }}</th>
        {{-- <td>
            <button type="button"  class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#edittypetransportasi{{ $typetransportasi->id_type_transportasi }}"><i class="bi bi-pencil-fill"></i></button>
            <form class="d-inline" action="{{ 'typetransportasi/' .$typetransportasi->id_type_transportasi }}" method="POST">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger"><i class="bi bi-trash3-fill"></i></button>
        </form>
        </td> --}}
        <?php $i++; ?>
    </tr>
    {{-- Form Edit Start --}}
 {{-- <div class="modal fade" id="edittypetransportasi{{$typetransportasi->id_type_transportasi}}" tabindex="-1" aria-labelledby="edittypetransportasi" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
        <h1 class="modal-title fs-5" id="edittypetransportasi">Edit Data</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{route('typetransportasi.update', $typetransportasi->id_type_transportasi)}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label" for="id_type_transportasi">ID Type Transportasi</label>
                    <input type="id_type_transportasi" class="form-control" id="id_type_transportasi" name="id_type_transportasi" value="{{$typetransportasi->id_type_transportasi}}">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="nama_type">Nama Type</label>
                    <input type="nama_type" class="form-control" id="nama_type" name="nama_type" value="{{$typetransportasi->nama_type}}">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="keterangan">Keterangan</label>
                    <input type="keterangan" class="form-control" id="keterangan" name="keterangan" value="{{$typetransportasi->keterangan}}">
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
</div>    --}}
    {{-- Form Edit End --}}
    @endforeach
</tbody>
</table>

{{-- Form Tambah Start --}}
<div class="modal fade" id="typetransportasi" tabindex="-1" aria-labelledby="typetransportasi" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="typetransportasi">Tambah Data</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="typetransportasi" method="POST">
            @csrf
              <div class="mb-3">
                <label for="nama_type" class="form-label">Nama Type</label>
                <input type="string" id="nama_type" name="nama_type" class="form-control" placeholder="">
              </div>
              <div class="mb-3">
                <label for="keterangan" class="form-label">Keterangan</label>
                <input type="string" id="keterangan" name="keterangan" class="form-control" placeholder="">
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
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
  </div>
</section>

    
@endsection