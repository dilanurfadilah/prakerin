@extends('layouts.master')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Kasus') }} 
                </div>
                
                <div class="card">
                <a href="{{route('kasus.create')}}" class="btn btn-primary float-right"> Add Data </a>

                <div class="card-body" >
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                            
                        </div>
                    @endif
                    <table class="table table-dark table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Lokasi</th>
                                    <th>Rw</th>
                                    <th>Positif</th>
                                    <th>Meninggal</th>
                                    <th>Sembuh</th>
                                    <th>Tanggal</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no=1; @endphp
                                @foreach($kasus as $data)
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>
                                        Kelurahan : {{$data->rw->kelurahan->nama_kelurahan}}<br>
                                        Kecamatan : {{$data->rw->kelurahan->kecamatan->nama_kecamatan}}<br>
                                        Kota : {{$data->rw->kelurahan->kecamatan->kota->nama_kota}}<br>
                                        Provinsi : {{$data->rw->kelurahan->kecamatan->kota->provinsi->nama_provinsi}}
                                    </td>
                                    <td>{{$data->rw->rw}}</td>
                                    <td>{{$data->jumlah_positif}}</td>
                                    <td>{{$data->jumlah_meninggal}}</td>
                                    <td>{{$data->jumlah_sembuh}}</td>
                                    <td>{{$data->tanggal}}</td>
                                    <td>
                                        <form action="{{route('kasus.destroy',$data->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <a href="{{route('kasus.show',$data->id)}}" class="btn btn-sm btn-success">Show</a> |
                                            <a href="{{route('kasus.edit',$data->id)}}" class="btn btn-sm btn-warning">Update</a> |
                                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda Yakin ?')">
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection