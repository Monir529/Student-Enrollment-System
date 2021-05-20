@extends('admin.layout')
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
          <div class="row">
            <div class="col-lg-6 revenue-card grid-margin d-flex align-items-stretch">
              <div class="card w-100">
                <div class="card-body">
                  <h2 class="card-title">Website Traffic</h2>
                  <ul class="ct-legend mt-5"></ul>
                  <div id="dashboard-chartist-simple"></div>
                  <div class="row mx-1 mt-5 d-none d-sm-flex">
                    <div class="col-12">
                      <hr class="mt-1">
                    </div>
                    <div class="col-12 col-sm-4 revenue-details text-center text-sm-left">
                      <p class="head text-muted">Gross Revenue</p>
                      <p class="count">9,362.74</p>
                    </div>
                    <div class="col-12 col-sm-4 d-flex justifiy-content-center flex-column text-center revenue-details">
                      <p class="head text-muted">Gross Revenue</p>
                      <p class="count">9,362.74</p>
                    </div>
                    <div class="col-12 col-sm-4 text-center text-sm-right revenue-details">
                      <p class="head text-muted">Gross Revenue</p>
                      <p class="count">9,362.74</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
         
       

@endsection