@extends('layout')
 
@section('content')

<center>
<div class="card" style="width: 30rem;">
  <div class="card-body">
  @foreach ($jobs as $job)
    <h5 class="card-title">
    Job Title: {{ $job->title }}
    </h5>
    <p class="card-text">
    Job Description: {{ $job->description }}
    </p>
    <p class="card-text">
    Position: {{ $job->position }}
    </p>
    <p class="card-text">
    Location: {{ $job->location }}
    </p>
    <a class="btn btn-primary" href='/show-jobs/{{$job->id}}'>Apply</a>
    <hr>
@endforeach
</div>
</div>

</center>
@endsection
