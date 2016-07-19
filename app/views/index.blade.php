@extends('layouts.master')
@section('content')
<h2>Welcome to wrs jobs</h2>
<div class="container">
@if(Session::has('message'))
    <div class="alert alert-info">
        <p>{{ Session::get('message') }}</p>
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
      @foreach($jobs as $j)
      <tr>
      <td>{{$j->id}}</td>
      <td>{{$j->email}}</td>
      <td>{{$j->title}}</td>
      <td>{{$j->details}}</td>
      <td>{{$j->skills}}</td>
      <td>{{$j->ccode}}</td>
      <td></td>
      
       
      </tr>
        @endforeach
    </tbody>
  </table>
	</div>
</div>

@endsection