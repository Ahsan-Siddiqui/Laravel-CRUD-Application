<!--Navbar -->
<nav class="mb-1 navbar navbar-expand-lg navbar-dark black lighten-1">
  <a class="navbar-brand" href="#">Laravel App</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-555"
    aria-controls="navbarSupportedContent-555" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent-555">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="{{url('/')}}">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('/create')}}">Add New</a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto nav-flex-icons">
      <li class="nav-item avatar">
        <a class="nav-link p-0" href="#">
          <img src="{{asset('public/mdb/img/mypic.jpg')}}" class="rounded-circle z-depth-0"
            alt="avatar image" width="35" height="35">
        </a>
      </li>
    </ul>
  </div>
</nav>
<!--/.Navbar -->