@extends('admin.layout')
@section('content')

<div class="col-12 col-lg-6 grid-margin">
                  <div class="card">
                      <div class="card-body">
                          <h2 class="card-title">Teacher Registration</h2>
                          <form class="forms-sample" action="{{URL('/teacher_register')}}" method="post" enctype="multipart/form-data">
                          {{ csrf_field() }}
                              <div class="form-group row">
                              <label for="exampleInputEmail2" class="col-sm-4 col-form-label">Teacher Name</label>
                                  <div class="col-sm-8">
                                    <input type="text"  name="teacher_name" class="form-control p-input" id="exampleInputEmail2" aria-describedby="emailHelp2" placeholder="Teacher Name">
                                    @error('teacher_name')
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

                              <div class="form-group row mb-4">
                                  <label class="col-sm-4 col-form-label">Upload Image</label>
                                  <div class="col-sm-8">
                                    <label for="exampleInputFile" class="btn btn-outline-primary btn-sm"><i class="mdi mdi-upload btn-label btn-label-left"></i>Browse</label>
                                    <input type="file" name="image" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp2">
                                  </div>
                              </div>
 

                              <button type="submit" class="btn btn-success btn-block mt-4">Submit</button>
                          </form>
                      </div>
                  </div>
              </div>

@endsection