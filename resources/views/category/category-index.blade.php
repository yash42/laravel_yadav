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
            <h2>Category</h2>

            <a href="{{route('category.create')}}" class="btn btn-primary">Add Category</a>
            <table class="table table-striped">

                <thead>
                    <tr>

                        <th>Item</th>
                        <th>Price</th>
                        <th>Qty</th>
                        <th>Total Price</th>
                        <th>Type</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categ as $qqq)
                    <tr>
                        
                        <td>{{$qqq->name}}</td>
                        <td>{{$qqq->price}}</td>
                        <td>{{$qqq->qty}}</td>
                        <td>{{$qqq->price * $qqq->qty}}</td>
                        <td>{{$qqq->type}}</td>
                        <td>
                            <a href="{{route('category.show', $qqq->id)}}">View</a> |
                            <a href="{{route('category.edit', $qqq->id)}}">Edit</a> |
                            <a href="{{route('category.destroy', $qqq->id)}}">Delete</a>
                        </td>
                       
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>

    </div>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>