@extends('layout1')

@section('seoTitle')
    Single Article
@endsection

@section('content')
<section class="section" id="about" style="padding: 200px 200px;
      display: block;">
     <h2 class="about-title featured-text text-center">{{ $articles ->title }}</h2>
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12">
                        <div class="about-image">
                            <img src="../images/slider_2.jpg" class="img-fluid" alt="art_photo">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 text-justify">
                       <p>{{ $articles->content }}</p>
                       <a href="/articles">Go Back</a>
                    </div>
                </div>
            </div>
        </section>
@endsection
