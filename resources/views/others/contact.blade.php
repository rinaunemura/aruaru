@extends('layouts.app')

@section('content')
<div id="contact" class="container">
  <h3 class="text-center">Contact</h3>
  <p class="text-center"><em>We love our fans!</em></p>

  <div class="row">
    <div class="col-md-4">
      <p>Fan? Drop a note.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span>Rakuten Crimson House, JP</p>
      <p><span class="glyphicon glyphicon-phone"></span>Tel:050-12345678</p>
      <p><span class="glyphicon glyphicon-envelope"></span>Email: teambob@rakuten.com</p>
    </div>
    <div class="col-md-8">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea>
      <br>
      <div class="row">
        <div class="col-md-12 form-group">
          <button class="btn pull-right" type="submit">Send</button>
        </div>
      </div>
    </div>
  </div>
  <br>
  <h3 class="text-center">Voice From The Productors</h3>  
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Nari</a></li>
    <li><a data-toggle="tab" href="#menu1">Rina</a></li>
    <li><a data-toggle="tab" href="#menu2">Shiori</a></li>
    <li><a data-toggle="tab" href="#menu3">Yookie</a></li>
    <li><a data-toggle="tab" href="#menu4">Yui</a></li>
    <li><a data-toggle="tab" href="#menu5">Bazz</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h2>Nari,Productor owner</h2>
      <p>I hope this site can help you find your bosom friend!</p>
    </div>
    <div id="menu1" class="tab-pane fade">
      <h2>Rina, Scrum Master</h2>
      <p>xxxxxxxxx</p>
    </div>
    <div id="menu2" class="tab-pane fade">
      <h2>Shiori, Member</h2>
      <p>xxxxxxx</p>
    </div>
    <div id="menu3" class="tab-pane fade">
      <h2>Yookie, Member</h2>
      <p>xxxxxx</p>
    </div>
    <div id="menu4" class="tab-pane fade">
      <h2>Yui , Member</h2>
      <p>xxxxxx</p>
    </div>
    <div id="menu5" class="tab-pane fade">
      <h2>Bazz, Member</h2>
      <p>I hope you will enjoy this website!</p>
    </div>
  </div>
</div>


@endsection
