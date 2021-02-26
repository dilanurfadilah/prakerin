@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Menampilkan Data Edit Provinsi</div>
                <div class="card-body">
                   <!--FORM INPUT PROVINSI -->

                  <form action="{{route('provinsi.update',$provinsi->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Kode Provinsi</label>
                          <input type="text" name="kode_provinsi" value="{{$provinsi->kode_provinsi}}"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">    

                       </div>
                       <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">Nama Provinsi</label>
                          <input type="text"  name="nama_provinsi"  value="{{$provinsi->nama_provinsi}}"class="form-control" id="exampleInputPassword1">

                      </div>
                        <button type="submit" class="btn btn-primary">Edit Data</button>
                      </form>
                    

                </div>
            </div>
        </div>
    </div>
</div>
@endsection