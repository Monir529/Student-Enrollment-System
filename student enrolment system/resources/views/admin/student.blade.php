@extends('admin.layout')
@section('content')


          <div class="row user-profile">
            <div class="col-lg-12 side-left">
              <div class="card mb-4">
                <div class="card-body avatar">
               
                  <h2 class="card-title">Info</h2>
                  <img src="{{URL($student->image)}}" height="80" width="100" style="border-radius:50%;">
                  <p class="name">{{$student->student_name}}</p>
                  <h2 class="designation">{{$student->student_roll}}</h2>
                  <h2 class="designation">{{$student->department}}</h2>
                  <a class="email" href="#">{{$student->email}}</a>
                  <a class="number" href="#">{{$student->phone}}</a>
               
                </div>
              </div>
              <div class="card mb-12">
                <div class="card-body overview">
                  <ul class="achivements">
                    <li><p>34</p><p>Projects</p></li>
                    <li><p>23</p><p>Task</p></li>
                    <li><p>29</p><p>Completed</p></li>
                  </ul>
                  <div class="wrapper about-user">
                    <h2 class="card-title mt-4 mb-3">About</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam consectetur ex quod.</p>
                  </div>
                  <div class="info-links">
                    <a class="website" href="#">
                      
                      <span style="color:black" >Father Name:{{$student->father_name}}</span>
                    </a>
                    <a class="social-link" href="#">
                      
                      <span style="color:black">Mother Name:{{$student->mother_name}}</span>
                    </a>
                    <a class="social-link" href="#">
                      
                      <span style="color:black">Address:{{$student->address}}</span>
                    </a>
                    <a class="social-link" href="#">
                      
                      <span style="color:black">Admission Year:{{$student->admission_year}}</span>
                    </a>
                   
                  </div>
                </div>
              </div>
            </div>
          </div>


@endsection