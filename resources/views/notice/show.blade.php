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

    <div class="container">
      <div class="row">
        <div class="col-md-10 offset-md-1 text-center">
          <h1>Notice #{{$data->id}}</h1>

          <div class="card mx-auto col-md-10 ">
            <div class="card-body">
              <h4 class="card-title">{{$data->title}}</h4>
              <p class="card-text text-left">{{$data->content}}</p>
              <p class="card-text"><img src="{{asset('images/'.$data->file)}}" class="img-responsive"></p>
              
            </div>
          </div>

        </div>
      </div>
    </div>

  </div>

  <!-- Bootstrap JS and Popper.js -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>