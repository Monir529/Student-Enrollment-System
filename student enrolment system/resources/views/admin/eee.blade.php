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
                          <th>Student Roll</th>
                          <th>Student Name </th>
                          <th>Email</th>
                          <th>Address</th>
                          <th>Department</th>
                          
                          <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($student as $student)
                      <tr>
                          <td><img src="{{URL($student->image)}}" height="80" width="100" style="border-radius:50%;"></td>
                          <td>{{$student->student_roll}}</td>
                          <td>{{$student->student_name}}</td>
                          <td>{{$student->email}}</td>
                          <td>{{$student->address}}</td>
                          <td>{{$student->department}}</td>
                         
                          <td>
                          <a class="btn btn-outline-primary"  href="{{URL('/student_view/'.$student->student_id)}}">View</a>
                          </td>
                          <td>
                          <a class="btn btn-outline-warning" href="{{URL('/student_edit/'.$student->student_id)}}">Edit</a>                          </td>
                         <td>
                         <a class="btn btn-outline-danger" href="{{URL('/eee_delete/'.$student->student_id)}}">Delete</a>
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