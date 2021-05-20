@extends('admin.layout')
@section('content')

<div class="col-12 col-lg-6 grid-margin">
                  <div class="card">
                      <div class="card-body">
                          <h2 class="card-title">Student Registration</h2>
                          <form class="forms-sample" action="{{URL('/register')}}" method="post" enctype="multipart/form-data">
                          {{ csrf_field() }}
                              <div class="form-group row">
                                  <label for="exampleInputEmail2" class="col-sm-4 col-form-label">Student Name</label>
                                  <div class="col-sm-8">
                                    <input type="text"  name="student_name"class="form-control p-input" id="exampleInputEmail2" aria-describedby="emailHelp2" placeholder="Enter Name">
                                    @error('student_name')
              <span style="color:red"><div class="error">{{ $message }}</div></span>
              @enderror 
                                  </div>
                                  
                              </div>
                              <div class="form-group row">
                                  <label for="exampleInputPassword2" class="col-sm-4 col-form-label">Student Roll</label>
                                  <div class="col-sm-8">
                                    <input type="text" name="student_roll" class="form-control p-input" id="exampleInputPassword2" placeholder="Student Roll">
                                    @error('student_roll')
              <span style="color:red"><div class="error">{{ $message }}</div></span>
              @enderror 
                                  </div>
                            
                              </div>
                              <div class="form-group row">
                                  <label for="exampleInputEmail2" class="col-sm-4 col-form-label">Father Name</label>
                                  <div class="col-sm-8">
                                    <input type="text"  name="father_name"class="form-control p-input" id="exampleInputEmail2" aria-describedby="emailHelp2" placeholder="Father Name">
                                    @error('father_name')
              <span style="color:red"><div class="error">{{ $message }}</div></span>
              @enderror 
                                  </div>
                                  
                              </div>
                              <div class="form-group row">
                                  <label for="exampleInputEmail2" class="col-sm-4 col-form-label">Mother Name</label>
                                  <div class="col-sm-8">
                                    
                                  <input type="text"  name="mother_name"class="form-control p-input" id="exampleInputEmail2" aria-describedby="emailHelp2" placeholder="Mother Name">
                                  @error('mother_name')
              <span style="color:red"><div class="error">{{ $message }}</div></span>
              @enderror 
                                  </div>
                                  
                              </div>
                              <div class="form-group row">
                                  <label for="exampleInputEmail2" class="col-sm-4 col-form-label">Email</label>
                                  <div class="col-sm-8">
                                    <input type="email"  name="email"class="form-control p-input" id="exampleInputEmail2" aria-describedby="emailHelp2" placeholder="Email">
                                    @error('email')
              <span style="color:red"><div class="error">{{ $message }}</div></span>
              @enderror 
                                  </div>
                      </div>

                              <div class="form-group row">
                                  <label for="exampleInputEmail2" class="col-sm-4 col-form-label">Phone</label>
                                  <div class="col-sm-8">
                                    <input type="text"  name="phone" class="form-control p-input" id="exampleInputEmail2" aria-describedby="emailHelp2" placeholder="Phone">
                                    @error('phone')
              <span style="color:red"><div class="error">{{ $message }}</div></span>
              @enderror 
                                  </div>
                                  
                              </div>
                              <div class="form-group row">
                                  <label for="exampleInputEmail2" class="col-sm-4 col-form-label">Address</label>
                                  <div class="col-sm-8">
                                    <input type="text"  name="address"class="form-control p-input" id="exampleInputEmail2" aria-describedby="emailHelp2" placeholder="Address">
                                    @error('address')
              <span style="color:red"><div class="error">{{ $message }}</div></span>
              @enderror 
                                  </div>
                                  
                              </div>

                              <div class="form-group row mb-4">
                                  <label class="col-sm-4 col-form-label">Upload Image</label>
                                  <div class="col-sm-8">
                                    <label for="exampleInputFile" class="btn btn-outline-primary btn-sm"><i class="mdi mdi-upload btn-label btn-label-left"></i>Browse</label>
                                    <input type="file" name="image" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp2">
                                  </div>
                              </div>
                              
                              <div class="form-group row">
                                  <label for="exampleInputEmail2" class="col-sm-4 col-form-label">Password</label>
                                  <div class="col-sm-8">
                                    <input type="password"  name="password" class="form-control p-input" id="exampleInputEmail2" aria-describedby="emailHelp2" placeholder="Password">
                                    @error('password')
              <span style="color:red"><div class="error">{{ $message }}</div></span>
              @enderror 
                                  </div>
                                  
                              </div>
                              <div class="form-group row">
                                  <label for="exampleInputEmail2" class="col-sm-4 col-form-label">Department</label>
                                  <div class="col-sm-8">
                                  
                                  <select class="form-control p-input" name="department">
                                  <option ></option>
                                  <option value="cse">CSE</option>
                                  <option value="eee">EEE</option>
                                  <option value="bba">BBA</option>
                                  <option value="english">English</option>
                                  <option value="law">Law</option>
                                  </select>
                                  @error('department')
              <span style="color:red"><div class="error">{{ $message }}</div></span>
              @enderror 
                                  </div>
                                  
                              </div>
                              <div class="form-group row">
                                  <label for="exampleInputEmail2" class="col-sm-4 col-form-label">Admission_Year</label>
                                  <div class="col-sm-8">
                                    <input type="date"  name="admission_year"class="form-control p-input" id="exampleInputEmail2" aria-describedby="emailHelp2" placeholder="Admission Year">
                                    @error('admission_year')
              <span style="color:red"><div class="error">{{ $message }}</div></span>
              @enderror 
                                  </div>
                                  
                              </div>


                              <button type="submit" class="btn btn-success btn-block mt-4">Submit</button>
                          </form>
                      </div>
                  </div>
              </div>

@endsection