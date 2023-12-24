<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <!-- Google Fonts - Choose an artistic font from Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kalnia:wght@500&family=Roboto&family=Whisper&display=swap"
        rel="stylesheet">
    <!-- Your custom styles -->

</head>

<body>
    <!-- Your page content goes here -->

    @include('layout.navigation')
    <div class="container article-container">


        <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">
                <div class="carousel-item active">



                    <div class="row">
                        <!-- First Article -->
                        <div class="col-md-4 article">
                            <h3>Article 1</h3>
                            <img src="{{ asset('images/boy1.jpeg') }}" alt="Article 1 Thumbnail">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec purus feugiat,
                                molestie ipsum et, consequat libero.
                            </p>
                        </div>

                        <!-- Second Article -->
                        <div class="col-md-4 article">
                            <h3>Article 2</h3>
                            <img src="{{ asset('images/ballon.png') }}" alt="Article 2 Thumbnail">
                            <p>
                                Curabitur euismod, nulla vel congue placerat, libero felis faucibus nisl, id pulvinar
                                quam purus vel justo.
                            </p>
                        </div>

                        <!-- Third Article -->
                        <div class="col-md-4 article">
                            <h3>Article 3</h3>
                            <img src="{{ asset('images/boy2.jpeg') }}" alt="Article 3 Thumbnail">
                            <p>
                                Proin nec ex vitae leo sagittis sagittis. Nullam fermentum eu elit at suscipit.
                            </p>
                        </div>
                    </div>


                </div>
                <div class="carousel-item">
                    <div class="row">
                        <!-- First Article -->
                        <div class="col-md-4 article">
                            <h3>Article 1</h3>
                            <img src="{{ asset('images/boy1.jpeg') }}" alt="Article 1 Thumbnail">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec purus feugiat,
                                molestie ipsum et, consequat libero.
                            </p>
                        </div>

                        <!-- Second Article -->
                        <div class="col-md-4 article">
                            <h3>Article 2</h3>
                            <img src="{{ asset('images/ballon.png') }}" alt="Article 2 Thumbnail">
                            <p>
                                Curabitur euismod, nulla vel congue placerat, libero felis faucibus nisl, id pulvinar
                                quam purus vel justo.
                            </p>
                        </div>

                        <!-- Third Article -->
                        <div class="col-md-4 article">
                            <h3>Article 3</h3>
                            <img src="{{ asset('images/boy2.jpeg') }}" alt="Article 3 Thumbnail">
                            <p>
                                Proin nec ex vitae leo sagittis sagittis. Nullam fermentum eu elit at suscipit.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <!-- First Article -->
                        <div class="col-md-4 article">
                            <h3>Article 1</h3>
                            <img src="{{ asset('images/boy1.jpeg') }}" alt="Article 1 Thumbnail">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec purus feugiat,
                                molestie ipsum et, consequat libero.
                            </p>
                        </div>

                        <!-- Second Article -->
                        <div class="col-md-4 article">
                            <h3>Article 2</h3>
                            <img src="{{ asset('images/ballon.png') }}" alt="Article 2 Thumbnail">
                            <p>
                                Curabitur euismod, nulla vel congue placerat, libero felis faucibus nisl, id pulvinar
                                quam purus vel justo.
                            </p>
                        </div>

                        <!-- Third Article -->
                        <div class="col-md-4 article">
                            <h3>Article 3</h3>
                            <img src="{{ asset('images/boy2.jpeg') }}" alt="Article 3 Thumbnail">
                            <p>
                                Proin nec ex vitae leo sagittis sagittis. Nullam fermentum eu elit at suscipit.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>


        <!-- Bootstrap JS and Popper.js -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>