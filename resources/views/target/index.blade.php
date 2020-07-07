@extends('app');

@section('content')

  <h1>~~~俺の目標~~~</h1>

  <form method="post" action="{{ route('target.store') }}" enctype="multipart/form-data">
    @csrf
    <label>will : 目標</label>
    <textarea name="will" row="2" required></textarea><br>
    <label>can  : なにができる?</label>
    <textarea name="can" row="2" required></textarea><br>
    <label>must : 何が必要</label>
    <textarea name="must" row="2" required></textarea><br>
    <button type="submit">投稿</button><br>
  </form>

  @foreach($target as $t)  
    <div class="card">
      <form action="{{ action('targetController@destroy', $t->id) }}" id="form_{{ $t->id }}" method="post" style="display:inline">
        @csrf
        @method('DELETE')
        <button type="submit" style="color: red; float: right;">削除</button>
      </form>
      <ul>
        <li>Will : {{ $t->will }}</li>
        <li>Can  : {{ $t->can }}</li>
        <li>Must : {{ $t->must }}</li>
      </ul>
    </div>
  @endforeach

@endsection


