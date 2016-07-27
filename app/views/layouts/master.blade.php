<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>WRS JOB</title>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <style>
    input[type=text] {
    width: 130px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: white;
    background-image: url('searchicon.png') ;
    background-size: 30px 30px;
    background-position: 5px 10px;
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
}

input[type=text]:focus {
    width: 100%;
}
  }
  </style>
</head>
<body class="text-center">
{{--site navigation --}}
  <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="{{route('jobs.index')}}">WRS Jobs</a>
    </div>
    <ul class="nav navbar-nav pull-right">
      <li><a href="{{route('jobs.create')}}">Create Job</a></li>
    
       {{-- <form action="{{url('/search')}}"><input type="text" name="search" placeholder="Search.."></form> --}}
       {{ Form::open(array('url' => '/search')) }}
        {{Form::text(null,null,['id'=>'keyword'])}}
        {{ Form::close() }}
        <div id="result_box"></div>
    </ul>
  </div>
</nav>

@yield('content')
<script   src="https://code.jquery.com/jquery-2.2.4.min.js"   integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="   crossorigin="anonymous"></script>
<script src="{{asset('js/search.js')}}"></script>
</body>
</html>
