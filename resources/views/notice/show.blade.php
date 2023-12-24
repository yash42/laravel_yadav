@extends('layout.app')
@section('content')
<div class="row">
  <div class="col-md-10 offset-md-1 text-center">
    <h1>Notice #{{$data->id}}</h1>

    <div class="card mx-auto col-md-10 ">
      <div class="card-body">
        <h4 class="card-title">{{$data->title}}</h4>
        <p class="card-text text-left">{{$data->content}}</p>
        <p class="card-text"><img src="{{asset('images/'.$data->filename)}}" class="img-responsive img-fluid"></p>

      </div>
    </div>

  </div>
</div>
@endsection