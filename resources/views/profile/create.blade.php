@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('profile.store') }}" method="post">
                            @csrf
                            
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" name="nama" id="nama" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="usia">Usia</label>
                                <input type="number" name="usia" id="usia" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="jenis_kelamin">Jenis Kelamin</label>
                                <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                                    <option value="">-Pilih-</option>
                                    <option>Laki-Laki</option>
                                    <option>Perempuan</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="tempat_lahir">Tempat Lahir</label>
                                <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="tgl_lahir">Tanggal Lahir</label>
                                <input type="text" name="tgl_lahir" id="tgl_lahir" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="hobi">Hobi</label>
                                <input type="text" name="hobi" id="hobi" class="form-control">
                            </div>
                            <div>
                                <button class="btn btn-outline-info btn-block">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection