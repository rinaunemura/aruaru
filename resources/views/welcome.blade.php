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

@endsection

@section('content')
    @include('auth.signup_and_login')
    @include('others.contact')
@endsection