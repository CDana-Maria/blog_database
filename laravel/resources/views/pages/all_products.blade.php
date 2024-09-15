@extends('layout1')

@section('seoTitle')
All Services
@endsection

@section('content')
<section style="padding: 200px 200px;display: block; ">
    <h2 class="about-title featured-text text-center" >Our Products<home></home></h2>
    <div class="container mb-3">
        <div class="row menu" style="float:right">
            <!-- Example split danger button -->
            <div class="btn-group ">
                <button type="button" class="btn btn-info">Sort By</button>
                <button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="sr-only">Sort By</span>
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="{!! url('/services/date'); !!}">Date</a>
                    <a class="dropdown-item" href="{!! url('/services/price'); !!}">Price</a>
                    <a class="dropdown-item" href="{!! url('/services/all'); !!}">All</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid mt-5">
        <div class="col-12">
            <div class="row mt-5">
                @foreach ($all as $all )
                <div class="col">
                    <div class="card text-center" style="width: 18rem;">
                        <div class="card-header">
                        </div>
                        <img src="../images/prod.webp" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="col">
                                <div class="d-flex mt-3 align-items-center">
                                    <a href="/services/{{ $all->id }}" class="text-dark">
                                        <h5 class="card-title name">{{ $all->name }}</h5>
                                    </a>
                                    <h5 class="card-title price ml-auto">{{ $all->price }}$</h5>
                                </div>
                            </div>
                            <p class="card-text description">{{ $all->description }}</p>
                        </div>
                        <div class="card-footer text-muted" >

                            <add-to-cart-button :product-id="{
                                id: {{ $all->id }},
                                name: '{{ $all->name }}',
                                price: '{{$all->price }}'
                            }"> </add-to-cart-button>   


                             <!-- <a href="#" class="btn btn-success add-cart">Add to Cart</a> -->

                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endsection
