<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
  <meta name="description" content="@yield('seoDescription', 'Blog and Blog')">
  <meta name="author" content="Dana-Maria Cozaru">
  <title>@yield('seoTitle', 'My Project')</title>
  
  <link href="{{ URL::asset('/css/myproject/appp.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset ('/node_modules/bootstrap/dist/css/bootstrap.css') }}">
  <link rel="stylesheet" href="{{ asset ('/node_modules/css/font-awesome.min.css') }}">

  @yield('headerScripts')
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
  <style>
        /* section {
      padding: 200px 200px;
      display: block;
    } */
    .card-header,
    .card-footer {
      background: #3e6866;
    }
    .blog .row .post a {
      font-size: 0.9rem;
      color: #3e6866;
      font-weight: bold;
    }
    .blog .row .sidebar .row .sidetext h4 {
      font-size: 1rem;
    }
    .blog .row .sidebar .row .sidetext a {
      color: #3e6866;
      font-size: 0.8rem;
    }
    /* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
    @media screen and (max-width: 800px) {
      .leftcolumn,
      .rightcolumn {
        width: 100%;
        padding: 0;
      }
    }

   
  </style>
</head>
<body>
  <main role="main" id="app">
    @include('header')
    @yield('content')
    @include('footer')
  </main>
  <script>
    $(document).ready(function() {
      $('.customer-logos').slick({
        slidesToShow: 5,
        slidesToScroll: 2,
        autoplay: true,
        pauseOnHover: true,
      });
    });
  </script>
  <script src="https://www.google.com/recaptcha/api.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
  <script src="{{ URL::asset('/js/main.js') }}"></script>
  <script src="{{ URL::asset('/js/app.js') }}"></script>

  @yield('footerScripts')
</body>
</html>
