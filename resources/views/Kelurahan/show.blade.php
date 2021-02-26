@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Menampilkan Data Kelurahan</div>
                <div class="card-body">
                        @csrf
                       <div class="form-group">
                               <label for="">Nama Kelurahan</label>
                               <input type="text" name="nama_kelurahan" value="{{$kelurahan->nama_kelurahan}}" class="form-control" readonly>
                       </div>
                       <div class="form-group">
                               <label for="">Nama Kecamatan</label>
                               <input type="text" name="id_kecamatan" value="{{$kelurahan->kecamatan->nama_kecamatan}}" class="form-control" readonly>
                       </div>
                       <div class="form-group">
                        <a href="{{url()->previous()}}" class="btn btn-outline-secondary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection