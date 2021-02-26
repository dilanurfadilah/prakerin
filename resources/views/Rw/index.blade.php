@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                  Data Rw
                  <a href="{{route('rw.create')}}" class="btn btn-outline-success float-right">
                    Add Data
                  </a>
                </div>
                  <div class="card-body">
                    <div class="table-responsive">
                       <table class="table">
                         <thead>
                      <tr>
                            <th>No</th>
                            <th>Rw</th>
                            <th>Nama Kelurahan</th>
                            <th>Action</th>
                      </tr>
                  </thead>
                   <tbody>
                        @php $no = 1; @endphp
                        @foreach ($rw as $data)
                        <tr>
                            <td>{{$no++}}</td>
                            <td>{{$data->rw}}</td>
                            <td>{{$data->kelurahan->nama_kelurahan}}</td>
                            <td>
                                  
                                    <form action="{{route('rw.destroy', $data->id)}}" method="post">
                                        @csrf
                                        @method("DELETE")
                                        <a href="{{ route('rw.show', $data->id) }}" class="btn btn-outline-primary">Show</a> 
                                        <a href="{{ route('rw.edit', $data->id) }}"class="btn btn-outline-success">Edit</a>
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