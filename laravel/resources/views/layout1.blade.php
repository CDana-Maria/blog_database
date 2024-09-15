<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
  <meta name="description" content="@yield('seoDescription', 'Blog and Blog')">
  <meta name="author" content="Dana-Maria Cozaru">
  <title>@yield('seoTitle', 'My Project')</title>

  
  <link href="{{ mix('/css/appp.css') }}" rel="stylesheet">
    <!-- <link href="/css/myproject/appp.css" rel="stylesheet"> -->


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
    integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    


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
   <main  role="main" id="app">
      @include('header1')
      @yield('content') 
      @include('footer')
    </main>
  
  <script>
    $(document).ready(function () {
      $('.customer-logos').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
        arrows: false,
        dots: false,
        pauseOnHover: false,
        responsive: [{
          breakpoint: 768,
          setting: {
            slidesToShow: 4
          }
        }, {
          breakpoint: 520,
          setting: {
            slidesToShow: 3
          }
        }]
      });
    });
  </script>

<script>
    $recaptcha = $_POST['g-recaptcha-response'];
    $res = reCaptcha($recaptcha);
    if (!$res['success']) {
      // Error
    }
    function reCaptcha($recaptcha) {
      $secret = "YOUR SECRET KEY";
      $ip = $_SERVER['REMOTE_ADDR'];

      $postvars = array("secret"=> $secret, "response"=> $recaptcha, "remoteip" => $ip);
      $url = "https://www.google.com/recaptcha/api/siteverify";
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLOPT_TIMEOUT, 10);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $postvars);
      $data = curl_exec($ch);
      curl_close($ch);
      return json_decode($data, true);

    }

    $res = post_captcha($_POST['g-recaptcha-response']);
    if(!$res['success']) {
      echo '<p> Not checked</p> <br>';
    }
    else {
      echo '<br> <p>Completed </p> <br>';
    }
    
  </script>
    <script src="https://www.google.com/recaptcha/api.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
    integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF"
    crossorigin="anonymous"></script>
    <!-- <script src="{{ URL::asset('/js/main.js') }}"></script> -->
    <!-- <script src="{{ URL::asset('/js/app.js') }}"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
    <script src="{{ mix('/js/app.js') }}"></script>

    <!-- <script src="{{ asset('/js/app.js') }}"></script> -->

    @yield('footerScripts')
</body>

</html>
