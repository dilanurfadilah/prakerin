@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Edit Data Kasus 
                </div>
                <div class="card">
                <div class="card-body" >
                <form  action="{{route('kasus.update',$kasus->id)}}" method="post">
                    @csrf
                    @livewireStyles

                    @livewireScripts
                      @method('PUT')
                     <div>
                         @livewire('covid',['selectedState5' => $kasus->id_rw])
                     </div>

                      <div class="form-group">
                        <label for="">Positif</label>
                        <input type="text" name="jumlah_positif" value="{{$kasus->jumlah_positif}}" class="form-control" required>
                        @if ($errors->has('jumlah_positif'))
                        <span class="text-danger">{{ $errors->first('jumlah_positif') }}</span>
                    @endif 
                    </div>
                     <div class="form-group">
                        <label for="">Meninggal</label>
                        <input type="text" name="jumlah_meninggal" value="{{$kasus->jumlah_meninggal}}" class="form-control" required>
                        @if ($errors->has('jumlah_meninggal'))
                        <span class="text-danger">{{ $errors->first('jumlah_meninggal') }}</span>
                    @endif  
                    </div>
                     <div class="form-group">
                        <label for="">Sembuh</label>
                        <input type="text" name="jumlah_sembuh" value="{{$kasus->jumlah_sembuh}}" class="form-contro" required>
                        @if ($errors->has('jumlah_sembuh'))
                        <span class="text-danger">{{ $errors->first('jumlah_sembuh') }}</span>
                    @endif 
                    </div>
                     <div class="form-group">
                        <label for="">Tanggal</label>
                        <input type="date" name="tanggal" value="{{$kasus->tanggal}}" class="form-control" required>
                        @if ($errors->has('tanggal'))
                        <span class="text-danger">{{ $errors->first('tanggal') }}</span>
                    @endif 
                    </div>
                    <div class="form-group"> 
                        <button type="submit" class="btn btn-success">Ubah</button>
                        <a href="{{url()->previous()}}" class="btn btn-outline-info">Kembali</a>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection