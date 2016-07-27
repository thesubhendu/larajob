@extends('layouts.master')
@section('content')
<h2>Welcome to wrs jobs</h2>
<div class="container">
@if(Session::has('message'))
    <div class="alert alert-info">
        <p>{{ Session::get('message') }}</p>
    </div>
@endif
    @if(Session::has('deleted'))
    <div class="alert alert-success">
        <p>{{ Session::get('deleted') }}</p>
    </div>
    @endif
	<div class="row">
		<table class="table table-bordered">
    <thead >
      <tr>
        <th>ID</th>
        <th>Email</th>
        <th>Title</th>
        <th>Details</th>
        <th>Skills</th>
        <th>CCode</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($jobs as $job)
      <tr>
      <td>{{$job->id}}</td>
      <td>{{$job->email}}</td>
      <td>{{$job->title}}</td>
      <td>{{$job->details}}</td>
      <td>{{$job->skills}}</td>
      <td>{{$job->ccode}}</td>
      <td>

          {{--<a href="{{route('jobs.destroy',$job->id)}}">Delete</a>--}}
          <a href="{{route('jobs.edit',$job->id)}}" class="btn btn-info ">Edit Job</a>
          <!-- delete button -->
          {{ Form::open(array('route' => ['jobs.destroy',$job->id])) }}
          {{ Form::hidden('_method', 'DELETE') }}
          {{ Form::submit('Delete Job', array('class' => 'btn btn-warning')) }}
          {{ Form::close() }}
      </td>
      
       
      </tr>
        @endforeach
    </tbody>
  </table>

  
	</div>
</div>

@endsection