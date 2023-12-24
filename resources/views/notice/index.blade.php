@extends('layout.app')
@section('content')
<div class="container mt-5">
  <h1 class="text-center">Notice Board</h1>
  <div class="text-right"> <a href="{{route('notice.create')}}" class="btn btn-primary">Add new notice</a> </div>

  @foreach($notices as $ntcs)
  <div class="card mx-auto col-md-8">
    <div class="card-body">
      <h5 class="card-title">{{$ntcs->title}}</h5>
      <p class="card-text">{{$ntcs->content}}</p>
      <p class="card-text">
        <small class="text-muted col-md-6">Post date: {{$ntcs->updated_at}}</small>
        <small class="text-muted col-md-6 text-right">
          <a href="{{ route('notice.show', ['id' => $ntcs->id]) }}">View</a> |
          <a href="{{route('notice.edit', $ntcs->id)}}">Edit</a> |
          <a href="{{route('notice.delete',$ntcs->id)}}">Delete</a>
        </small>
      </p>
    </div>
  </div>
  @endforeach
</div>
@endsection

