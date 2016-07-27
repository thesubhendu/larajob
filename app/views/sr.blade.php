<div class="result-box">
    @foreach($searchedJobs as $result)
      {{$result->title}} <br>
    @endforeach
  </div>