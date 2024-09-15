@extends('layout1')

@section('seoTitle')
Single Service
@endsection

@section('content')

<section style="padding: 200px 200px;
    display: block;">
  <div class="container">
    <div class="row">
    @foreach ($service->organizator as $org )
      
      <div class="col">
        <img id=featured src="../images/prod_4.webp" alt="prod_sl1">
        <div id="slide-wrapper">
          <img id="slideLeft" class="arrow" src="../images/arr_left.png" alt="arr_left">
          <div id="slider">
            <img class="thumbnail active" src="../images/prod_2.webp" alt="prod_sl2">
            <img class="thumbnail" src="../images/prod_3.webp" alt="prod_sl3">
            <img class="thumbnail" src="../images/prod_4.webp" alt="prod_sl4">
            <img class="thumbnail" src="../images/prod_5.webp" alt="prod_sl5">
            <img class="thumbnail" src="../images/prod_6.webp" alt="prod_sl6">
            <img class="thumbnail" src="../images/prod_1.webp" alt="prod_sl7">
            <img class="thumbnail" src="../images/prod_2.webp" alt="prod_sl8">
          </div>
          <img id="slideRight" class="arrow" src="../images/arr-right.png" alt="arr_right">
        </div>
      </div>

      <div class="col">
        <div class="card-header text-white">
          <h1>{{ $service->name }}</h1>
        </div>
        <hr>
        <h3>
          {{ $service->description }}
        </h3>
        <p>
          {{ $service->content }}
        </p>
        <h2>Price: {{ $service->price }}$</h2>
        <hr>
        <h5>Organizator: {{ $org->name }}</h5>

        <div class="card-footer text-muted ">
        <add-to-cart-button :product-id="{
                                id: {{ $service->id }},
                                name: '{{ $service->name }}',
                                price: '{{$service->price }}'
                            }"> </add-to-cart-button>    
        <a href="/services/all" class="btn btn-success align-items-right">Go Back</a>
        </div>
      </div>
    </div>
  </div>
  @endforeach
</section>
<script type="text/javascript">
  let thumbnails = document.getElementsByClassName('thumbnail')
  let activeImages = document.getElementsByClassName('active')
  for (var i = 0; i < thumbnails.length; i++) {
    thumbnails[i].addEventListener('mouseover', function() {
      console.log(activeImages)
      if (activeImages.length > 0) {
        activeImages[0].classList.remove('active')
      }
      this.classList.add('active')
      document.getElementById('featured').src = this.src
    })
  }
  let buttonRight = document.getElementById('slideRight');
  let buttonLeft = document.getElementById('slideLeft');
  buttonLeft.addEventListener('click', function() {
    document.getElementById('slider').scrollLeft -= 180
  })
  buttonRight.addEventListener('click', function() {
    document.getElementById('slider').scrollLeft += 180
  })
</script>
@endsection
