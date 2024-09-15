@extends('layout1')

@section('seoTitle')
    Sort By Price Services 
@endsection

@section('content')
<style>

    </style>
        <section style=" padding: 200px 200px;
            display: block;">
            <h2 class="about-title featured-text text-center">Our Products</h2>
            <div class="container mb-3">
                <div class="row menu" style="float: right">
                    <!-- Example split danger button -->
                    <div class="btn-group ">
                        <button type="button" class="btn btn-info">Sort By</button>
                        <button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="sr-only">Sort By</span>
                        </button>
                        <div class="dropdown-menu">
                        <a class="dropdown-item" href="/services/date">Date</a>
                            <a class="dropdown-item" href="/services/price">Price</a>
                            <a class="dropdown-item" href="/services/all">All</a>
                            </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid mt-5">
                <div class="col-12">
                    <div class="row mt-5">
@foreach ($price as $price )
     <div class="col">
                            <div class="card text-center" style="width: 18rem;">
                                <div class="card-header">
                                </div>
                                <img src="../images/prod.webp" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <div class="col">
                                        <div class="d-flex mt-3 align-items-center">
                                            <a href="/services/{{ $price->id }}" class="text-dark">
                                                <h5 class="card-title">{{ $price->name }} </h5>
                                            </a>
                                            <h5 class="card-title price ml-auto">{{ $price->price }}$</h5>
                                        </div>
                                    </div>
                                    <p class="card-text">{{ $price->description }}</p>
                                </div>
                                <div class="card-footer text-muted">
                                <add-to-cart-button :product-id="{
                                id: {{ $price->id }},
                                name: '{{ $price->name }}',
                                price: '{{$price->price }}'
                            }"> </add-to-cart-button>                                    </div>
                            </div>
                        </div>
@endforeach

                    </div>
                </div>
            </div>
        </section>
@endsection
