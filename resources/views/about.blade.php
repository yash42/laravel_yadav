<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Me</title>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <!-- Bootstrap CSS -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
  <!-- Google Fonts - Choose an artistic font from Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kalnia:wght@500&family=Roboto&family=Whisper&display=swap" rel="stylesheet">
  <!-- Your custom styles -->

</head>
<body>
@include('layout.navigation')
  <!-- Your page content goes here -->
  <div>
    <div class="row">
        <!-- Portrait Image Column (on small screens, it takes 4 out of 12 columns) -->
        <div class="col-sm-4">
            <img src="{{ asset('images/guy-with-guitar.png') }}" alt="Portrait" class="img-thumbnail img-fluid rounded">
        </div>

        <!-- Text Content Column (on small screens, it takes 8 out of 12 columns) -->
        <div class="col-sm-8">
            <h2>About Me</h2>
            <p>
                Hello, I'm [Your Name]. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Nulla nec purus feugiat, molestie ipsum et, consequat libero. Integer euismod lacus vel
                fermentum elementum. Sed quis tellus vel lorem dapibus condimentum vitae in dolor.
            </p>
            <p>
                Curabitur euismod, nulla vel congue placerat, libero felis faucibus nisl, id pulvinar
                quam purus vel justo. Proin nec ex vitae leo sagittis sagittis. Nullam fermentum eu
                elit at suscipit.
            </p>
            <p>
                Hello, I'm [Your Name]. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Nulla nec purus feugiat, molestie ipsum et, consequat libero. Integer euismod lacus vel
                fermentum elementum. Sed quis tellus vel lorem dapibus condimentum vitae in dolor.
            </p>
            <p>
                Curabitur euismod, nulla vel congue placerat, libero felis faucibus nisl, id pulvinar
                quam purus vel justo. Proin nec ex vitae leo sagittis sagittis. Nullam fermentum eu
                elit at suscipit.
            </p>
            <p>
                Hello, I'm [Your Name]. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Nulla nec purus feugiat, molestie ipsum et, consequat libero. Integer euismod lacus vel
                fermentum elementum. Sed quis tellus vel lorem dapibus condimentum vitae in dolor.
            </p>
            <p>
                Curabitur euismod, nulla vel congue placerat, libero felis faucibus nisl, id pulvinar
                quam purus vel justo. Proin nec ex vitae leo sagittis sagittis. Nullam fermentum eu
                elit at suscipit.
            </p>
            <!-- Add more content as needed -->
        </div>
    </div>
</div>
  <!-- Bootstrap JS and Popper.js -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
