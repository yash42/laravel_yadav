<!-- Navigation Bar -->
<nav class="navbar navbar-expand-lg navbar-dark">
  <div class="container">
    <!-- Brand/logo -->
    <a class="navbar-brand" href="#" style='font-family: Whisper; font-size:40px;'>Yadav Shrestha</a>

    <!-- Toggle button for small screens -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navigation Links -->
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="{{route('index')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('about')}}">About me</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('notice.index')}}">Notices</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('articles')}}">Articles</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Gallery</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        <li class="nav-item">
          <a class="nav-link" href="{{route('category.index')}}">Category</a>
        </li>
      </ul>
    </div>
  </div>
</nav>