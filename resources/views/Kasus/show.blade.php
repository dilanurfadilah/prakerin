@extends('layouts.master')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Data Rw') }} 
                </div>
                
                <div class="card">
             

                <div class="card-body">
                     <div class="form-group">
                        <label for="">RW</label>
                        <input type="text" name="id_rw" class="form-control" value="{{$kasus->rw->rw}}" value="{{'kasuse->nama_rw'}}"readonly>
                    </div>
                      <div class="form-group">
                    <div class="mb-12>
                        <label for="exampleInputPassword1" class="form-label">Positif</label>
                        <input type="number" class="form-control" id="exampleInputPassword1" name="jumlah_positif"
                         value="{{$kasus->jumlah_positif}}"readonly>
                    </div>
                     </div>
                     <div class="form-group">
                    <div class="mb-12>
                        <label for="exampleInputPassword1" class="form-label">Meninggal</label>
                        <input type="number" class="form-control" id="exampleInputPassword1" name="jumlah_meninggal"
                        value="{{$kasus->jumlah_meninggal}}" readonly>
                    </div>
                     </div>
                     <div class="form-group">
                    <div class="mb-12>
                        <label for="exampleInputPassword1" class="form-label">Sembuh</label>
                        <input type="number" class="form-control" id="exampleInputPassword1" name="jumlah_sembuh"
                        value="{{$kasus->jumlah_sembuh}}" readonly>
                    </div>
                     </div>
                     <div class="form-group">
                    <div class="mb-12>
                        <label for="exampleInputPassword1" class="form-label">Tanggal</label>
                        <input type="date" class="form-control" id="exampleInputPassword1" name="tanggal"
                        value="{{$kasus->tanggal}}" readonly>
                    </div>
                     </div>
                   
                     <a href="{{ url()->previous() }}" class="btn btn-primary">Back</a></button>

                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection