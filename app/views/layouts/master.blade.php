<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>WRS JOB</title>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body class="text-center">
{{--site navigation --}}
  <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="{{route('jobs.index')}}">WRS Jobs</a>
    </div>
    <ul class="nav navbar-nav pull-right">
      <li class="active"><a href="{{route('jobs.create')}}">Create Job</a></li>
      
    </ul>
  </div>
</nav>

@yield('content')
</body>
</html>
