@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
        <div class="card border-0 shadow">
        <div class="card-body">
            <div class="d-flex mb-2p">
                <div class="mr-auto mb-2">
                    
                    <a href="{{route('profile.create')}}" class="btn btn-info mr-2">Tambah Data Profile</a>
                </div>
            
                <form action="" method="GET">
                    <div class="row">
                       <div class="col-md-4">
                           <div class="form-group">
                                <input type="date" name="tgl_awal" class="form-control" id="tgl_awal">
                          </div>
                      </div>
                      <div class="col-md-4">
                          <div class="form-group">
                              <input type="date" name="tgl_akhir" class="form-control" id="tgl_akhir">
                         </div>
                     </div>
                     <div>
                       <button class="btn btn-info"> Cari data </button>
                     </div>
                    </div>                 
                </form>
            </div>

                <table class="table table-stripped">
                    <thead>
                        <tr>
                            
                            <th>Nama</th>       
                            <th>Usia</th>
                            <th>Tempat Lahir</th>
                            <th>Tgl Lahir</th>
                            <th>Jenis Kelamin</th>
                            <th>Hobi</th>
                            <th>Options</th>
                        </tr>
                    </thead>
                  <tbody>
                      @foreach ($profiles as $profile)
                      <tr>
                          <td>{{$profile->nama}}</td>
                          <td>{{$profile->usia}}</td>
                          <td>{{$profile->tempat_lahir}}</td>
                          <td>{{$profile->tgl_lahir}}</td>
                          <td>{{$profile->jenis_kelamin}}</td>
                          <td>{{$profile->hobi}}</td>
                          <td>
                            <form action="{{route('profile.delete', $profile->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                              <a href="{{route('profile.edit', $profile->id)}}" class="btn btn-warning btn-sm">Edit</a>
                              <a href="{{route('profile.detail', $profile->id)}}" class="btn btn-primary btn-sm">Detail</a>
                              <button class="btn btn-danger btn-sm">Delete</button>
                            </form>
                          </td>
                      </tr>
                      @endforeach
                  </tbody>
                </table>
                </div>
            </div>
          
        </div>
    </div>
</div>

@endsection