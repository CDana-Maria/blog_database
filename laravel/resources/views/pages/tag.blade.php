@extends('layout1')

@section('seoTitle')
Tag Page
@endsection

@section('content')

<section style="padding: 200px 200px;
    display: block;"> 
    <h2 class="about-title featured-text text-center">Tag: {{ $tags->name }}</h2>
    <div class="col-12">
      <div class="row">
        @foreach ($a_t as $t_a )
        @if ($t_a->tag_id === $tags->id)
        @foreach ($articles as $article )
        @if($article->id === $t_a->article_id)
        <div class="post1 col-4">
          <img class="img-fluid pb-3" src="../images/prod_9.webp" alt="article1">
          <h3>{{ $article->title }}</h3>
          <p>{{ $article->short_description }}</p>
          <a href="/articles/{{ $article->id }}">Read more</a>
          <small class="text-muted float-right">3 mins</small>
          <div>
            <small class="text-muted float-left"> Tag: <a href="/tag/{{ $tags->id }}">{{ $tags->name}}</a></small>
          </div>
        </div>
        @endif
        @endforeach
        @endif
        @endforeach
      </div>
    </div>
    </div>
  </section>
  @endsection
  