@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Menampilkan Data Edit Kelurahan</div>
                   <div class="form-group">
                      <form action="{{route('kelurahan.update',$kelurahan->id)}}" method="POST">
                        <!-- <input type="hidden" name="_method" value="PUT"> -->
                          @csrf
                          @method('PUT')
                         <div class="form-group">
                              <label for="">Nama Kelurahan</label>
                              <input type="text"  name="nama_kelurahan"  value="{{$kelurahan->nama_kelurahan}}"class="form-control" required>  
                         </div>
                         <div class="form-group">
                              <label for="exampleFormControlSelect1">Kecamatan</label>
                              <select class="form-control" name="id_kecamatan" id="exampleFormControlSelect1">
                                  @foreach ($kecamatan as $data)
                                      <option value="{{$data->id}}"
                                        @if($data->nama_kecamatan == $kelurahan->kecamatan->nama_kecamatan)
                                        selected
                                        @endif
                                        >
                                        {{$data->nama_kecamatan}}
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