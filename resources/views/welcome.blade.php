



@extends('layouts.app')

@section('cover')
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="/images/bg1.jpg" alt="New York" width="1200" height="700">
        <div class="carousel-caption">
          <h3>ARUARU 1</h3>
          <p>ホワイトボード使いがち！</p>
        </div>      
      </div>

      <div class="item">
        <img src="/images/bg3.jpg" alt="Chicago" width="1200" height="700">
        <div class="carousel-caption">
          <h3>ARUARU 2</h3>
          <p>班で飲みに行きがち！</p>
        </div>      
      </div>
    
      <div class="item">
        <img src="/images/bg2.jpg" alt="Los Angeles" width="1200" height="700">
        <div class="carousel-caption">
          <h3>ARUARU　3</h3>
          <p>金曜日の午後、騒がしくなりがち！</p>
        </div>      
      </div>
    </div>

    
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>


<div id="aruaru" class="container text-center">
  <h3>THE ARUARU</h3>
  <p><em>About ARUARU BULLETIN BOARD & TEAM MEMBER</em></p>
  <p>あるある掲示板とは、
普段思っているが、実際には口にしないことを共有するための、楽天18卒による楽天18卒のための楽天18卒の掲示板である。さぁ、レッツあるある！</p>
  <br>
  <div class="row">
    <div class="col-sm-2">
      <p class="text-center"><strong>Nari</strong></p><br>
      <a href="#demo" data-toggle="collapse">
        <img src="/images/m3.jpg" class="img-circle person" alt="Random Name" width="255" height="255" >
      </a>
      <div id="demo" class="collapse">
        <p>Born in Shanghai,1992</p>
        <p>Love playing game,watching movie,reading,drinking.</p>
        <p>Call me Nari!</p>
      </div>
    </div>
    <div class="col-sm-2">
      <p class="text-center"><strong>Bazz</strong></p><br>
      <a href="#demo2" data-toggle="collapse">
        <img src="/images/m2.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo2" class="collapse">
        <p>Born in Yamanashi 1994</p>
        <p>Love singing,watching movies eating</p>
        <p>Call me Bazz!</p>
      </div>
    </div>
    <div class="col-sm-2">
      <p class="text-center"><strong>Shiori</strong></p><br>
      <a href="#demo3" data-toggle="collapse">
        <img src="/images/m5.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo3" class="collapse">
 
        <p>Born in Tokyo 1996</p>
        <p>Love eating the coffee jelly </p>
        <p>Please call me Maru</p>
      </div>
    </div>
    <div class="col-sm-2">
      <p class="text-center"><strong>Yookie</strong></p><br>
      <a href="#demo4" data-toggle="collapse">
        <img src="/images/m.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo4" class="collapse">
        <p>Born in Aichi 1994</p>
        <p>Love writing, editing, interviewing, camera,skateboarding</p>
        <p>Call me Yuuki</p>
      </div>
    </div>
    <div class="col-sm-2">
      <p class="text-center"><strong>Rina</strong></p><br>
      <a href="#demo5" data-toggle="collapse">
        <img src="/images/m4.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo5" class="collapse">
        <p>Born in Tokyo, 1993</p>
        <p>Love traveling, scuba diving, watching movies </p>
        <p>Call me Rina:)</p>
      </div>
    </div>
    <div class="col-sm-2">
      <p class="text-center"><strong>Yui</strong></p><br>
      <a href="#demo6" data-toggle="collapse">
        <img src="/images/m6.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo6" class="collapse">
        <p>Born in Shizuoka 1995</p>
        <p>Love Sake, Golf and Fishing</p>
        <p>Call me Yui</p>
      </div>
    </div>
  </div>
</div>


<div id="account" class="bg-1">
  <div class="container">
    <h3 class="text-center">SIGNUP & LOGIN</h3>
    <p class="text-center">Sign up&Login now,and view Today's ARUARU!<br> Remember do not post Douki's Rumors!</p>
    <ul class="list-group">
      
      <div class="col-sm-offset-1 col-sm-4">
        <div class="thumbnail">
          <img src="/images/top1.jpg"  width="400" height="300">
          <center><p><strong>Still don't have an account?</strong></p></center>
          <center><p>Sign up now and check ARUARU!</p></center>
          <center><button class="btn" data-toggle="modal" data-target="#signup">Signup</button></center>
        </div>
      </div>
      <div class="col-sm-offset-2 col-sm-4">
        <div class="thumbnail">
          <img src="/images/top2.jpg"  width="400" height="300">
          <center><p><strong>Have an account?</strong></p></center>
          <center><p>Let's post ARUARU now!</p></center>
          <center><button class="btn" data-toggle="modal" data-target="#login">Login</button></center>
        </div>
      </div>
  <div>
    <label>No.1 ARUARU</label><li class="list-group-item">No.1 ARUARU </li>
    <label>No.2 ARUARU</label><li class="list-group-item">No.2 ARUARU </li> 
    <label>No.3 ARUARU</label><li class="list-group-item">No.3 ARUARU </li> 
    </ul>
    <left><p>Want see more?<a href= class=text data-toggle="modal" data-target="#signup">Sign up now</a></left>
  </div>
    
  
    
    
      
      
    
  
  
  <div class="modal fade" id="signup" role="dialog">
    <div class="modal-dialog">
     <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4><span class="glyphicon glyphicon-lock"></span>Sign Up</h4>
        </div>
        {!! Form::open(['route' => 'signup.post']) !!}
                    <div class="form-group">
                        {!! Form::label('name', 'Nickname') !!}
                        {!! Form::text('name', old('name'), ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('email', 'E-mail') !!}
                        {!! Form::email('email', old('email'), ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('password', 'Password') !!}
                        {!! Form::password('password', ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('password_confirmation', 'Password') !!}
                        {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
                    </div>

                    <div class="text-right">
                        {!! Form::submit('Confirm!', ['class' => 'btn btn-success']) !!}
                    </div>
                {!! Form::close() !!}
            <div class="modal-footer">
              <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
              <span class="glyphicon glyphicon-remove"></span> Cancel
              </button>
              <p>Need <a href="#">help?</a></p>
            </div>
      </div>
    </div>
  </div>
</div>




<div class="modal fade" id="login" role="dialog">
    <div class="modal-dialog">
     <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Login</h4>
        </div>
        {!! Form::open(['route' => 'login.post']) !!}
                <div class="form-group">
                    {!! Form::label('email', 'Email') !!}
                    {!! Form::email('email', old('email'), ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('password', 'Password') !!}
                    {!! Form::password('password', ['class' => 'form-control']) !!}
                </div>

                {!! Form::submit('Log in', ['class' => 'btn btn-primary btn-block']) !!}
        {!! Form::close() !!}
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
            <span class="glyphicon glyphicon-remove"></span> Cancel
          </button>
          <p>New user?Sign up now!</p>
        </div>
      </div>
    </div>
  </div>
</div>






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



