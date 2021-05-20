@extends('student_layout')
@section('content')

<div class="col-12 col-lg-6 grid-margin">
                  <div class="card">
                      <div class="card-body">
                          <h2 class="card-title">Update profile</h2>
                          <form class="forms-sample" action="{{URL('/update_student/'.$student->student_id)}}" method="post" >
                          {{ csrf_field() }}

                              <div class="form-group row">
                                  <label for="exampleInputEmail2" class="col-sm-4 col-form-label">Email</label>
                                  <div class="col-sm-8">
                                    <input type="email" value="{{$student->email}}" name="email"class="form-control p-input" id="exampleInputEmail2" aria-describedby="emailHelp2" placeholder="Email">
                                  
                                  </div>
                      </div>

                              <div class="form-group row">
                                  <label for="exampleInputEmail2" class="col-sm-4 col-form-label">Phone</label>
                                  <div class="col-sm-8">
                                    <input type="text" value="{{$student->phone}}" name="phone" class="form-control p-input" id="exampleInputEmail2" aria-describedby="emailHelp2" placeholder="Phone">
                                   
                                  </div>
                                  
                              </div>
                            
                              <div class="form-group row">
                                  <label for="exampleInputEmail2" class="col-sm-4 col-form-label">Address</label>
                                  <div class="col-sm-8">
                                    <input type="text" value="{{$student->address}}" name="address" class="form-control p-input" id="exampleInputEmail2" aria-describedby="emailHelp2" placeholder="Address">
                                   
                                  </div>
                                  
                              </div>
                             
                              
                              <div class="form-group row">
                                  <label for="exampleInputEmail2" class="col-sm-4 col-form-label">Password</label>
                                  <div class="col-sm-8">
                                    <input type="password" value="{{$student->password}}" name="password" class="form-control p-input" id="exampleInputEmail2" aria-describedby="emailHelp2" placeholder="Password">
                                   
                                  </div>
                                  
                              </div>

                              <button type="submit" class="btn btn-success btn-block mt-4">Submit</button>
                          </form>
                      </div>
                  </div>
              </div>

@endsection