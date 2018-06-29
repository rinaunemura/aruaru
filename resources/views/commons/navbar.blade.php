<header>
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage">ARUARU BULLETIN BOARD</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        @if (Auth::check())
            <li><a href="#rank">RANK OF ARUARU</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">{{ Auth::user()->name }}
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#account">MyPage</a></li>
            <li> 
                {!! link_to_route('logout.get', 'Logout') !!}
            </li>
            
          </ul>
        </li>
        <li><a href="#know">KNOW MORE</a></li>
            </li>
        @else
        <li><a href="#myPage">HOME</a></li>
        <li><a href="#aruaru">ABOUT ARUARU</a></li>
        <li><a href="#account">ACCOUNT</a></li>
        <li><a href="#contact">CONTACT</a></li>
        @endif
        </ul>
    </div>
  </div>
</nav>
</header>