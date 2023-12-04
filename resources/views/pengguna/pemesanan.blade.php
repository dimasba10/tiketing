<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styless.css">
    <title>Pemesanan</title>
</head>
<body>
    <div class="container">
        <h1>Form Pemesanan</h1>
        <form action="datapemesanan" method="POST">
            @csrf
            {{-- <div class="form-group">
                <label for="kode_pemesanan">Kode Pemesanan:</label>
                <input type="string" id="kode_pemesanan" name="kode_pemesanan" placeholder="" required>
            </div> --}}
            <div class="form-group">
                <label for="tanggal_pemesanan">Tanggal Pemesanan:</label>
                <input type="date" id="tanggal_pemesanan" name="tanggal_pemesanan" placeholder="" required>
            </div>
            <div class="form-group">
                <label for="tempat_pemesanan">Tempat Pemesanan:</label>
                <input type="string" id="tempat_pemesanan" name="tempat_pemesanan" placeholder="" required>
            </div>
            <div class="form-group">
                <label for="id_penumpang">ID Penumpang:</label>
                <select name="id_penumpang" id="id_penumpang">
                    @foreach ($dtpenumpang as $item)
                        <option value="{{ $item->id_penumpang }}">{{ $item->nama_penumpang }}</option>
                    @endforeach
                </select>
            </div>
            {{-- <div class="form-group">
                <label for="kode_kursi">Kode Kursi:</label>
                <input type="string" id="kode_kursi" name="kode_kursi" placeholder="" required>
            </div> --}}
            <div class="form-group">
                <label for="id_rute">ID Rute:</label>
                <select name="id_rute" id="id_rute">
                    @foreach ($dtrute as $item)
                        <option value="{{ $item->id_rute }}">{{ $item->rute_awal }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="tujuan">Tujuan:</label>
                <input type="string" id="tujuan" name="tujuan" placeholder="" required>
            </div>
            <div class="form-group">
                <label for="tanggal_berangkat">Tanggal Berangkat:</label>
                <input type="date" id="tanggal_berangkat" name="tanggal_berangkat" placeholder="" required>
            </div>
            <div class="form-group">
                <label for="jam_cekin">Jam Cekin:</label>
                <input type="time" id="jam_cekin" name="jam_cekin" placeholder="" required>
            </div>
            <div class="form-group">
                <label for="jam_berangkat">Jam Berangkat:</label>
                <input type="time" id="jam_berangkat" name="jam_berangkat" placeholder="" required>
            </div>
            {{-- <div class="form-group">
                <label for="total_bayar">Total Bayar:</label>
                <input type="string" id="total_bayar" name="total_bayar" placeholder="" required>
            </div> --}}
            <div class="form-group">
                <label for="id_petugas">ID Petugas:</label>
                {{-- <input type="string" id="id_petugas" name="id_petugas" placeholder="" required> --}}
                <select name="id_petugas" id="id_petugas">
                    <option name="id_petugas" value="10">KaiZ</option>
                    <option name="id_petugas" value="15">Dimas</option>
                </select>
            </div>
            <div class="form-group">
                <button type="submit">Kirim</button>
            </div>
        </form>
    </div>
</body>
</html>
