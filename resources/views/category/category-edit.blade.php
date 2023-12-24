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
            <div class="col-md-6 offset-md-3">
            <h1>Edit Item</h1>
            <form method="POST" action="{{route('category.update', $categ->id)}}">
                    @csrf
                    <div class="form-group">
                        <label for="name">Item</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" value="{{$categ->name}}" >
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="number" class="form-control" id="price" name="price" placeholder="Enter Price" value="{{$categ->price}}">
                    </div>
                    <div class="form-group">
                        <label for="quantity">Quantity</label>
                        <input type="number" class="form-control" id="quantity" name="qty" placeholder="Enter Quantity" value="{{$categ->qty}}">
                    </div>
                    <div class="form-group">
                        <label for="type">Type</label>
                        <input type="text" class="form-control" id="type" name="type" placeholder="Enter Type" value="{{$categ->type}}">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
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