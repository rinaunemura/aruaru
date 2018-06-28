
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<!-- Container (Contact Section) -->
<div id="rank" class="container">
  <h3 class="text-center">HOGEHOGEO</h3>
  <p class="text-center"><em>HOGEHOGEKO!</em></p>
  <div class="row">
  <br>
  <h3 class="text-center"></h3>  
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">RANKING</a></li>
    <li><a data-toggle="tab" href="#list1">PostList</a></li>
  </ul>
  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>RANK</th>
                    <th>POST</th>
                </tr>
            </thead>
            <tbody>
                    <tr>
                        <td>1st</td>
                        <td><a href= class=text data-toggle="modal" data-target="#details">コーディング研修楽しいけど、つらい</a></td>
                    </tr>
                    <tr>
                     <td>2nd</td>
                     <td></td>
                    </tr>
                    <tr>
                        <td>3rd</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>4th</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>5th</td>
                        <td></td>
                    </tr>
            </tbody>
        </table>
    </div>
<!-- 
   @if (count($posts) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>User</th>
                    <th>Post</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>{!! link_to_route('posts.show', $post->id, ['id' => $post->id]) !!}</td>
                        <td>{{ $post->user_id }}</td>
                        <td>{{ $post->content }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
    ranking引っ張ってくる関数考えなきゃ
-->
    <div id="list1" class="tab-pane fade">
         <table class="table table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Post</th>
                </tr>
            </thead>
            <tbody>
                    <tr>
                        <td>コメントアウトした</td>
                        <td>関数に書き換えて実装してください</td>
                    </tr>
            </tbody>
        </table>
      <p></p>
    </div>
<!-- 
   @if (count($posts) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>User</th>
                    <th>Post</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>{!! link_to_route('posts.show', $post->id, ['id' => $post->id]) !!}</td>
                        <td>{{ $post->user_id }}</td>
                        <td>{{ $post->content }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
    ranking引っ張ってくる関数考えなきゃ
-->
<div class="modal fade" id="details" role="dialog">
    <div class="modal-dialog">
     <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4><span class="glyphicon glyphicon-eye-open"></span>Details</h4>
        </div>
        <div class="modal-body">
          <form role="form">
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-user"></span> Post by</label>
              <p>Nari</p>
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-time"></span> Timeline</label>
              <p>時間(いつPOSTしたのか？TIMELINE機能の実装！</p>
            </div>
            
              <button type="submit" class="btn btn-block">ARUARU!
                <span class="glyphicon glyphicon-ok"></span>
              </button>
          </form>
        </div>
        <!-- 各ARUARU内容の詳細,一覧にも同じ機能を実装してください。-->
      </div>
    </div>
  </div>
</div>
  </div>
</div>
</div>
<div id="account" class="bg-1">
  <div class="container">
    <h3 class="text-center">Welcome to ARUARU,Nari</h3>
    <p class="text-center">Let's post something!<br> Remember do not post Douki's Rumors!</p>
    <ul class="list-group">
    <div class="row text-center">
    <div class="tab-content">
       
       
    <div class="userpage">     
    <ul class="nav nav-tabs">
      
   <li><a data-toggle="tab" href="#my3">Post My ARUARU</a></li>
   <li><a data-toggle="tab" href="#my1">My ARUARU List</a></li>
   <li><a data-toggle="tab" href="#my2">List of like</a></li>
 　　</ul>
   </div> 
   <div class="tab-content">
   <div id="my1" class="tab-pane fade ">
     <h2>自分の投稿した一覧</h2>
     <p>関数で引っ張てくるのであーる</p>
   </div>
   <div id="my2" class="tab-pane fade">
     <h2>自分のあるねした一覧</h2>
     <p>関数で引っ張ってくるのであ－る</p>
   </div>
  <div id="my3" class="tab-pane fade in active">
     <h2>ARUARUしよう</h2>
     <div class="col-sm-offset-3 col-sm-6 form-group">
          <input class="form-control" id="content" name="content" placeholder="ARUARU" type="text" required="">
        </div>
          <div class="col-md-12 form-group">
          <button class="btn1 pull-center" type="submit">Send</button>
        </div>
         </div>
      </div>
    </div>
  </div>
</div>
</div>
<div id="know" class="container text-center">
  <h3>THE ARUARU</h3>
  <p><em>About ARUARU BULLETIN BOARD & TEAM MEMBER</em></p>
  <p>あるある掲示板とは、
普段思っているが、実際には口にしないことを共有するための、楽天18卒による楽天18卒のための楽天18卒の掲示板である。さぁ、レッツあるある！</p>
  <br>
  <div class="row">
    <div class="col-sm-4">
      <p class="text-center"><strong>決まり事</strong></p><br>
      <a href="#demo" data-toggle="collapse">
        <img src="know/know1.jpg" class="img-circle person" alt="Random Name" width="255" height="255" >
      </a>
      <div id="demo" class="collapse">
        
        <p>みんなが楽しく使えるように、周りが不快に思うような誹謗中傷は絶対にやめてください。</p>
        
      </div>
    </div>
    <div class="col-sm-4">
      <p class="text-center"><strong>あるネ機能</strong></p><br>
      <a href="#demo2" data-toggle="collapse">
        <img src="know/know2.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo2" class="collapse">
        
        <p>共感した投稿にあるネ！をしよう！いつでも自分のページからチェック可能！</p>
      </div>
    </div>
    <div class="col-sm-4">
      <p class="text-center"><strong>ランキング機能</strong></p><br>
      <a href="#demo3" data-toggle="collapse">
        <img src="know/know3.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo3" class="collapse">
        <p>あるネ！された数によって全体のランキングが作成されます。ランキングは随時更新！ </p>
        
      </div>
    </div>
    
  </div>
</div>
<footer class="text-center">
  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <p>Made by Team BOB@2018</p> 
</footer>
<script>
$(document).ready(function(){
  
  $('[data-toggle="tooltip"]').tooltip(); 
  
  
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    
    if (this.hash !== "") {
      
      event.preventDefault();
      // Store hash
      var hash = this.hash;
      
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        
        window.location.hash = hash;
      });
    } // End if
  });
})
</script>
</body>
</html>

 
 
