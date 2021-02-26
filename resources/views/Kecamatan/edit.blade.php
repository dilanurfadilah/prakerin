@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Menampilkan Data Edit Kecamatan</div>
                   <div class="form-group">
                      <form action="{{route('kecamatan.update',$kecamatan->id)}}" method="POST">
                        <!-- <input type="hidden" name="_method" value="PUT"> -->
                          @csrf
                          @method('PUT')
                         <div class="form-group">
                               <label for="">Kode Kecamatan</label>
                               <input type="text" name="kode_kecamatan" value="{{$kecamatan->kode_kecamatan}}"class="form-control" required>    
                         </div>
                         <div class="form-group">
                              <label for="">Nama Kecamatan</label>
                              <input type="text"  name="nama_kecamatan"  value="{{$kecamatan->nama_kecamatan}}"class="form-control" required>  
                         </div>
                         <div class="form-group">
                              <label for="exampleFormControlSelect1">Kota</label>
                              <select class="form-control" name="id_kota" id="exampleFormControlSelect1">
                                  @foreach ($kota as $data)
                                      <option value="{{$data->id}}"
                                        @if($data->nama_kota == $kecamatan->kota->nama_kota)
                                        selected
                                        @endif
                                        >
                                        {{$data->nama_kota}}
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