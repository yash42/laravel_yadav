@extends('layout.app')
@section('content')
<div class="row">
    <!-- Portrait Image Column (on small screens, it takes 4 out of 12 columns) -->
    <div class="col-sm-4 col-md-12">
        <img src="{{ asset('images/boy_with-guitar.jpg') }}" alt="Portrait" class="img-thumbnail img-fluid rounded">
    </div>

    <!-- Text Content Column (on small screens, it takes 8 out of 12 columns) -->
    <div class="col-sm-12 col-md-12">
        <!-- Your text content goes here -->
        <p>
            Curabitur euismod, nulla vel congue placerat, libero felis faucibus nisl, id pulvinar
            quam purus vel justo. Proin nec ex vitae leo sagittis sagittis. Nullam fermentum eu
            elit at suscipit.
        </p>
    </div>
</div>
@endsection