<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Homepage</title>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <!-- Bootstrap CSS -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
  <!-- Google Fonts - Choose an artistic font from Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Kalnia:wght@500&family=Roboto&family=Whisper&display=swap"
    rel="stylesheet">
  <!-- Your custom styles -->

</head>

<body>
  <!-- Your page content goes here -->
  <div>
    @include('layout.navigation')

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
                    <a href="#">Delete</a>
                </small>
            </p>
        </div>
    </div>
@endforeach



    </div>

  </div>

  <!-- Bootstrap JS and Popper.js -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>