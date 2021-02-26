@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Menampilkan Data Edit Provinsi</div>
                   <div class="form-group">
                      <form action="{{route('kota.update',$kota->id)}}" method="POST">
                        <!-- <input type="hidden" name="_method" value="PUT"> -->
                          @csrf
                          @method('PUT')
                         <div class="form-group">
                               <label for="">Kode Kota</label>
                               <input type="text" name="kode_kota" value="{{$kota->kode_kota}}"class="form-control" required>    
                         </div>
                         <div class="form-group">
                              <label for="">Nama Kota</label>
                              <input type="text"  name="nama_kota"  value="{{$kota->nama_kota}}"class="form-control" required>  
                         </div>
                         <div class="form-group">
                              <label for="exampleFormControlSelect1">Provinsi</label>
                              <select class="form-control" name="id_provinsi" id="exampleFormControlSelect1">
                                  @foreach ($provinsi as $data)
                                      <option value="{{$data->id}}"
                                        @if($data->nama_provinsi == $kota->provinsi->nama_provinsi)
                                        selected
                                        @endif
                                        >
                                        {{$data->nama_provinsi}}
                                      </option>
                                  @endforeach
                           </select>
                           <div class="form-group">
                                <button type="submit" class="btn btn-outline-primary">Edit</button>
                                <a href="{{url()->previous()}}" class="btn btn-outline-secondary">Kembali</a>
                           </div>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection