              @extends('layouts.master')

              @section('content')
              <div class="container">
                  <div class="row justify-content-center">
                      <div class="col-md-8">
                          <div class="card">
                              <div class="card-header">Dashboard</div>

                              <div class="card-body">
                                
                                <a href="{{route('provinsi.create')}}" class="btn btn-outline-success float-right"><b>Add Data</b></a>
                                
                                  <table class="table">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Kode Provinsi</th>
                    <th scope="col">Provinsi</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                @php $no = 1; @endphp
                @foreach ($provinsi as $data)
                  <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{$data->kode_provinsi}} </td>
                    <td>{{$data->nama_provinsi}} </td>
                    <td>
                      
                    <form action="{{route('provinsi.destroy', $data->id)}}" method="post">
                    @csrf
                    @method("DELETE")
                    <a href="{{ route('provinsi.show', $data->id) }}" class="btn btn-outline-primary">Show</a> 
                    <a href="{{ route('provinsi.edit', $data->id) }}"class="btn btn-outline-success">Edit</a>
                    <button  type="submit" onclick="return confirm('Apakah Anda Yakin?')" class="btn btn-outline-danger">Delete</button>
                    </td>

                  </tr>
                  </form>
                  @endforeach
                  <tr>
                    <th scope="row"></th>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                  </tr>
                </tbody>
              </table>

                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              @endsection