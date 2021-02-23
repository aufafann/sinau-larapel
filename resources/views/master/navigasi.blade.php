<nav class="navbar navbar-expand-lg">
 <h2 class="navss">Laravel</h2>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link navs" href="{{url ('/')}}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link navs" href="{{url ('/about')}}">About</a>
      </li>
      <li class="nav-item">
        <a href="{{url ('/siswa')}}" class="nav-link navs">Data Siswa</a>
      </li>
      <li class="nav-item">
        <a href="{{url ('/login')}}" class="nav-link navs">login</a>
      </li>
      <li class="nav-item">
        <a href="{{url ('/logout')}}" class="nav-link navs">logout</a>
      </li>
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>