@extends('layouts.master')
@section('content')
<form action="{{route('jobs.store')}}" method="post">
	<div class="form-group">
    <label class="control-label col-sm-2" for="email">Email:</label>
    <div class="col-sm-10">
      <input name="email" type="email" class="form-control" id="email" placeholder="Enter email">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Job Title:</label>
    <div class="col-sm-10">
      <input name="title" type="text" class="form-control" id="email" placeholder="Enter Title">
    </div>
  </div>
   <div class="form-group">
    <label class="control-label col-sm-2" for="email">Job Details:</label>
    <div class="col-sm-10">
      <input name="details" type="text" class="form-control" id="email" placeholder="Enter Jobs Details">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Skills:</label>
    <div class="col-sm-10">
      <input name="skills" type="text" class="form-control" id="email" placeholder="">
    </div>
  </div>

  
  
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default" name="btnSave">Submit</button>
    </div>
  </div>
</form>
@endsection