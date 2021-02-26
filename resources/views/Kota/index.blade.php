@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                  Data Kota
                  <a href="{{route('kota.create')}}" class="btn btn-outline-success float-right">
                    Add Data
                  </a>
                </div>
                  <div class="card-body">
                    <div class="table-responsive">
                       <table class="table">
                         <thead>
                      <tr>
                            <th>No</th>
                            <th>Kode Kota</th>
                            <th>Nama Kota</th>
                            <th>Nama Provinsi</th>
                            <th>Action</th>
                      </tr>
                  </thead>
                   <tbody>
                        @php $no = 1; @endphp
                        @foreach ($kota as $data)
                        <tr>
                            <td>{{ $no++}}</td>
                            <td>{{$data->kode_kota}}</td>
                            <td>{{$data->nama_kota}}</td>
                            <td>{{$data->provinsi->nama_provinsi}}</td>
                            <td>
                                  
                                    <form action="{{route('kota.destroy', $data->id)}}" method="post">
                                        @csrf
                                        @method("DELETE")
                                        <a href="{{ route('kota.show', $data->id) }}" class="btn btn-outline-primary">Show</a> 
                                        <a href="{{ route('kota.edit', $data->id) }}"class="btn btn-outline-success">Edit</a>
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