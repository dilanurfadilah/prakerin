@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                  Data Kecamatan
                  <a href="{{route('kecamatan.create')}}" class="btn btn-outline-success float-right">
                    Add Data
                  </a>
                </div>
                  <div class="card-body">
                    <div class="table-responsive">
                       <table class="table">
                         <thead>
                      <tr>
                            <th>No</th>
                            <th>Kode Kecamatan</th>
                            <th>Nama Kecamatan</th>
                            <th>Nama Kota</th>
                            <th>Action</th>
                      </tr>
                  </thead>
                   <tbody>
                        @php $no = 1; @endphp
                        @foreach ($kecamatan as $data)
                        <tr>
                            <td>{{ $no++}}</td>
                            <td>{{$data->kode_kecamatan}}</td>
                            <td>{{$data->nama_kecamatan}}</td>
                            <td>{{$data->kota->nama_kota}}</td>
                            <td>
                                  
                                    <form action="{{route('kecamatan.destroy', $data->id)}}" method="post">
                                        @csrf
                                        @method("DELETE")
                                        <a href="{{ route('kecamatan.show', $data->id) }}" class="btn btn-outline-primary">Show</a> 
                                        <a href="{{ route('kecamatan.edit', $data->id) }}"class="btn btn-outline-success">Edit</a>
                                        <button  type="submit" onclick="return confirm('Apakah Anda Yakin?')" class="btn btn-outline-danger">Delete</button>
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