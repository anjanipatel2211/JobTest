@extends('layout')
  
@section('content')
<main class="login-form">
  <div class="cotainer">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">Add Job</div>
                  <div class="card-body">
  
                      <form action="{{ route('add-job.post') }}" method="POST">
                          @csrf
                          <div class="form-group row">
                              <label for="title" class="col-md-4 col-form-label text-md-right">Title</label>
                              <div class="col-md-6">
                                  <input type="text" id="title" class="form-control" name="title" required autofocus>
                                  @if ($errors->has('title'))
                                      <span class="text-danger">{{ $errors->first('title') }}</span>
                                  @endif
                              </div>
                          </div>
  
                          <div class="form-group row">
                              <label for="description" class="col-md-4 col-form-label text-md-right">Description</label>
                              <div class="col-md-6">
                                  <input type="text" id="description" class="form-control" name="description" required autofocus>
                                  @if ($errors->has('description'))
                                      <span class="text-danger">{{ $errors->first('description') }}</span>
                                  @endif
                              </div>
                          </div>
  
                          <div class="form-group row">
                              <label for="position" class="col-md-4 col-form-label text-md-right">Position</label>
                              <div class="col-md-6">
                                  <input type="text" id="position" class="form-control" name="position" required>
                                  @if ($errors->has('position'))
                                      <span class="text-danger">{{ $errors->first('position') }}</span>
                                  @endif
                              </div>
                          </div>
  
                          <div class="form-group row">
                              <label for="location" class="col-md-4 col-form-label text-md-right">Location</label>
                              <div class="col-md-6">
                                  <input type="text" id="location" class="form-control" name="location" required>
                                  @if ($errors->has('location'))
                                      <span class="text-danger">{{ $errors->first('location') }}</span>
                                  @endif
                              </div>
                          </div>
                         
  
                          <div class="col-md-6 offset-md-4">
                              <button type="submit" class="btn btn-primary">
                                  Add Job
                              </button>
                          </div>
                      </form>
                        
                  </div>
              </div>
          </div>
      </div>
  </div>
</main>
@endsection