@extends('layouts.master')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    Tambah Data Kasus
                </div>
                <div class="card">
                <div class="card-body" >
                <form  action="{{route('kasus.store')}}" method="post">
                  @csrf
                    @livewireStyles

                      @livewire('covid')

                      @livewireScripts
                      
                      <div class="form-group">
                          <label for="">Positif</label>
                          <input type="text" name="jumlah_positif" class="form-control" required>
                          @if ($errors->has('jumlah_positif'))
                          <span class="text-danger">{{ $errors->first('jumlah_positif') }}</span>
                      @endif 
                        </div>
                      <div class="form-group">
                        <label for="">Meninggal</label>
                        <input type="text" name="jumlah_meninggal" class="form-control" required>
                        @if ($errors->has('jumlah_meninggal'))
                        <span class="text-danger">{{ $errors->first('jumlah_meninggal') }}</span>
                    @endif 
                </div>
                    <div class="form-group">
                        <label for="">Sembuh</label>
                        <input type="text" name="jumlah_sembuh" class="form-control" required>
                        @if ($errors->has('jumlah_sembuh'))
                        <span class="text-danger">{{ $errors->first('jumlah_sembuh') }}</span>
                    @endif 
                    </div>
                    <div class="form-group">
                        <label for="">Tanggal</label>
                        <input type="date" name="tanggal" class="form-control" required>
                        @if ($errors->has('tanggal'))
                        <span class="text-danger">{{ $errors->first('tanggal') }}</span>
                    @endif 
                    </div>
                    <div class="form-group">
                    <button type="submit" class="for fa-save btn btn-outline-primary float-right">Simpan</button>
                    </div>
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection