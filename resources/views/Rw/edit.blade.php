@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Menampilkan Data Edit Rw</div>
                   <div class="form-group">
                      <form action="{{route('rw.update',$rw->id)}}" method="POST">
                        <!-- <input type="hidden" name="_method" value="PUT"> -->
                          @csrf
                          @method('PUT')
                         <div class="form-group">
                              <label for=""> Rw</label>
                              <input type="text"  name="rw"  value="{{$rw->id_rw}}"class="form-control" required>  
                         </div>
                         <div class="form-group">
                              <label for="exampleFormControlSelect1">Kelurahan</label>
                              <select class="form-control" name="id_kelurahan" id="exampleFormControlSelect1">
                                  @foreach ($kelurahan as $data)
                                      <option value="{{$data->id}}"
                                        @if($data->nama_kelurahan == $rw->kelurahan->nama_kelurahan)
                                        selected
                                        @endif
                                        >
                                        {{$data->nama_kelurahan}}
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