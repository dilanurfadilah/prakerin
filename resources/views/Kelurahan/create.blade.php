@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Data Kelurahan</div>
                   <div class="card-body">
                       <form action="{{route('kelurahan.store')}}" method="POST">
                          @csrf
                         <div class="mb-3">
                            <label for="">Nama Kelurahan</label>
                            <input type="text" name="nama_kelurahan" class="form-control">       
                            @if ($errors->has('nama_kelurahan'))
                            <span class="text-danger">{{ $errors->first('nama_kelurahan') }}</span>
                        @endif 
                        </div>
                         <div class="mb-3">
                            <label for="">Nama Kecamatan</label>
                            <select class="form-control" name="id_kecamatan" id="">
                                @if ($errors->has('nama_kecamatan'))
                              <span class="text-danger">{{ $errors->first('nama_kecamatan') }}</span>
                          @endif
                                @foreach ($kecamatan as $data)
                                     <option value="{{$data->id}}">{{$data->nama_kecamatan}}</option>   
                                @endforeach
                            </select>
                         </div>
                         <div class="form-group">
                              <button type="submit" class="btn btn-outline-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection