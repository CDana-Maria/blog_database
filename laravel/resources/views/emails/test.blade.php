<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <body class="">

 
  Name: {{ $name }}
  <br><br>

  Email: {{ $email }}
  <br><br>

  Subject: {{ $subject }}
  <br><br>

  Message: {{ $content}}

</body>
</html>
