@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Menampilkan Data Provinsi</div>
                <div class="card-body">
                   <!--FORM INPUT PROVINSI -->

                  <form action="{{route('provinsi.store')}}" method="POST">
                        @csrf
                        <div class="mb-3">
                          <label for="">Kode Provinsi</label>
                          <input type="text" name="kode_provinsi" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">    
                          @if ($errors->has('kode_provinsi'))
                              <span class="text-danger">{{ $errors->first('kode_provinsi') }}</span>
                          @endif
                       </div>

                       <div class="mb-3">
                          <label for="">Nama Provinsi</label>
                          <input type="text"  name="nama_provinsi" class="form-control" id="exampleInputPassword1">
                          @if ($errors->has('nama_provinsi'))
                          <span class="text-danger">{{ $errors->first('nama_provinsi') }}</span>
                      @endif
                      </div>
                        <button type="submit" class="btn btn-primary">Add Data</button>
                      </form>
                    

                </div>
            </div>
        </div>
    </div>
</div>
@endsection