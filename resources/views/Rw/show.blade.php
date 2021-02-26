@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Menampilkan Data Rw</div>
                <div class="card-body">
                        @csrf
                       <div class="form-group">
                               <label for="">Rw</label>
                               <input type="text" name="id_rw" value="{{$rw->rw}}" class="form-control" readonly>
                       </div>
                       <div class="form-group">
                               <label for="">Nama Kelurahan</label>
                               <input type="text" name="id_kelurahan" value="{{$rw->kelurahan->nama_kelurahan}}" class="form-control" readonly>
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