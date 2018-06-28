<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
  
  <title>ARUARU BULLETIN BOARD FOR RAKUTEN 18</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="{{ secure_asset('css/style.css') }}">
    </head>
    <body>
        @include('commons.navbar')
        
        @yield('cover')

        <div class="container">
            @include('commons.error_messages')

            @yield('content')
        </div>
        @include('commons.footer')
    </body>
</html>