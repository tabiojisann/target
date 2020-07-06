@extends('app');

@section('content')

  <h1>~~~俺の目標~~~</h1>

  @foreach($target as $t)  
  <div class="card">
    <ul>
      <li>Will : {{ $t->will }}</li>
      <li>Can  : {{ $t->can }}</li>
      <li>Must : {{ $t->must }}</li>
    </ul>
  </div>
  @endforeach

@endsection