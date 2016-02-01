<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{ URL::to('/') }}">Fuster</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class=""><a href="{{ URL::to('principles') }}">Principles <span class="sr-only">(current)</span></a></li>
        <li><a href="{{ URL::to('projects') }}">Projects</a></li>
        <li><a href="{{ URL::to('services') }}">Services</a></li>
        <li><a href="{{ URL::to('variables') }}">Variables</a></li>
        <li><a href="{{ URL::to('password') }}">Change Password</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{URL::to('password')}}">hi, {{Auth::user()->name}}</a></li>
        <li><a href="{{ URL::to('logout') }}">Logout</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>