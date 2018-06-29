@extends('layouts.app')

@section('content')

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
  
@endsection