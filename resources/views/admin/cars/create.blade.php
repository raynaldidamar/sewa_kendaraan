@extends('layout.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            Form Tambah Data
        </div>
        <div class="card-body">
            <form action="{{route('admin.cars.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="nama_mobil">Nama Kendaraan</label>
                    <input type="text" name="nama_mobil" class="form-control" value="{{old('nama_mobil')}}">
                </div>

                <div class="form-group">
                    <label for="harga_sewa">Harga Sewa Kendaraan</label>
                    <input type="number" name="harga_sewa" class="form-control" value="{{old('harga_sewa')}}">
                </div>

                <div class="form-group">
                    <label for="bahan_bakar">Bahan Bakar Kendaraan</label>
                    <input type="text" name="bahan_bakar" class="form-control" value="{{old('bahan_bakar')}}">
                </div>

                <div class="form-group">
                    <label for="jumlah_kursi">Jumlah Kursi Kendaraan</label>
                    <input type="number" name="jumlah_kursi" class="form-control" value="{{old('jumlah_kursi')}}">
                </div>

                <div class="form-group">
                    <label for="jumlah_kursi">Plat Nomer</label>
                    <input type="text" name="plat_nomer" class="form-control" value="{{old('plat_nomer')}}">
                </div>

                <div class="form-group">
                    <label for="transmisi">Transmisi Kendaraan</label>
                    <select name="transmisi" id="transmisi" class="form-control">
                        <option value="Manual">Manual</option>
                        <option value="Otomatis">Otomatis</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="status">Status</label>
                    <select name="status" id="status" class="form-control">
                        <option value="Tersedia">Tersedia</option>
                        <option value="Tidak Tersedia">Tidak Tersedia</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea name="deskripsi" id="deskripsi" class="form-control" rows="5" cols="30"></textarea>
                </div>

                <div class="form-group">
                    <label for="p3k">P3K</label>
                    <select name="p3k" id="p3k" class="form-control">
                        <option value="1">Tersedia</option>
                        <option value="0">Tidak Tersedia</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="audio">Audio</label>
                    <select name="audio" id="audio" class="form-control">
                        <option value="1">Tersedia</option>
                        <option value="0">Tidak Tersedia</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="charger">Charger</label>
                    <select name="charger" id="charger" class="form-control">
                        <option value="1">Tersedia</option>
                        <option value="0">Tidak Tersedia</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="ac">AC</label>
                    <select name="ac" id="ac" class="form-control">
                        <option value="1">Tersedia</option>
                        <option value="0">Tidak Tersedia</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="gambar">Gambar</label>
                    <input type="file" class="form-control" name="gambar">
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>

            </form>
        </div>
    </div>
@endsection
