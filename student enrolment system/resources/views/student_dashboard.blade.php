@extends('student_layout')
@section('content')


            <div class="col-sm-6 col-md-3 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h2 class="card-title">Student</h2>
                  @php
                     $student=DB::table('students')
                                  ->count('student_id');
                  @endphp
                  <h1 style="font-family:cursive;font-weight:bold; text-align:center;">{{$student}}</h1>
                </div>
                <div class="dashboard-chart-card-container">
                  <div id="dashboard-card-chart-1" class="card-float-chart"></div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h2 class="card-title">Teacher</h2>
                  @php
                     $teacher=DB::table('teachers')
                                  ->count('teacher_id');
                  @endphp
                  <h1 style="font-family:cursive;font-weight:bold; text-align:center;">{{$teacher}}</h1>
                </div>
                <div class="dashboard-chart-card-container">
                  <div id="dashboard-card-chart-2" class="card-float-chart"></div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h2 class="card-title">Tution Fee</h2>
                  <h1 style="font-family:cursive;font-weight:bold; text-align:center;">5000</h1>
                </div>
                <div class="dashboard-chart-card-container">
                  <div id="dashboard-card-chart-3" class="card-float-chart"></div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h2 class="card-title">Revenue</h2>
                  <h1 style="font-family:cursive;font-weight:bold; text-align:center;">1000</h1>
                </div>
                <div class="dashboard-chart-card-container">
                  <div id="dashboard-card-chart-4" class="card-float-chart"></div>
                </div>
              </div>
            </div>
          </div>
         
            
         
       

@endsection