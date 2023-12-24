@extends('layout.app')
@section('content')
<div class="row">
            <div class="col-md-6 offset-md-3">
            <h1>Edit Notice</h1>
            <form method="POST" action="{{route('notice.update', $data->id)}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title" value="{{$data->title}}" >
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea type="text" class="form-control" id="description" name="description" placeholder="Enter Description">{{$data->content}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="addfile">Add file</label>
                        <p class="card-text"><img src="{{asset('images/'.$data->filename)}}" class="img-responsive img-fluid"></p>
                        <input type="file" class="form-control" id="addfile" name="addfile" placeholder="Add File" >
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
@endsection
