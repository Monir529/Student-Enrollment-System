@extends('admin.layout')
@section('content')

          <div class="card">
            <div class="card-body">
              <h2 class="card-title">Data table</h2>
              <div class="row">
                <div class="col-12">
                  <table id="order-listing" class="table table-striped" style="width:100%;">
                    <thead>
                      <tr>
                          <th>Image</th>
                          <th>Teacher Name </th>
                          <th>Phone</th>
                          <th>Address</th>
                          <th>Department</th>
                          <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($teacher as $teacher)
                      <tr>
                          <td><img src="{{URL($teacher->image)}}" height="80" width="100" style="border-radius:50%;"></td>
                          <td>{{$teacher->teacher_name}}</td>
                          <td>{{$teacher->phone}}</td>
                          <td>{{$teacher->address}}</td>
                          <td>{{$teacher->department}}</td>
                         
                          <td>
                            <a class="btn btn-outline-primary"  href="{{URL('/teacher_view/'.$teacher->teacher_id)}}">View</a>
                          </td>
                          <td>
                            <a class="btn btn-outline-warning" href="{{URL('/teacher_edit/'.$teacher->teacher_id)}}">Edit</a>
                          </td>
                         <td>
                         <a class="btn btn-outline-danger" href="{{URL('/teacher_delete/'.$teacher->teacher_id)}}">Delete</a>
                         </td>       
                      </tr>
                    @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
    

@endsection