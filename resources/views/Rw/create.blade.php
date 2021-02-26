@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Data Rw</div>
                   <div class="card-body">
                       <form action="{{route('rw.store')}}" method="POST">
                          @csrf
                         <div class="mb-3">
                            <label for="">Rw</label>
                            <input type="text" name="rw" class="form-control">       
                            @if ($errors->has('rw'))
                            <span class="text-danger">{{ $errors->first('rw') }}</span>
                        @endif
                        </div>
                         <div class="mb-3">
                            <label for="">Nama Kelurahan</label>
                            <select class="form-control" name="id_kelurahan" id="">
                                @foreach ($kelurahan as $data)
                                     <option value="{{$data->id}}">{{$data->nama_kelurahan}}</option>   
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