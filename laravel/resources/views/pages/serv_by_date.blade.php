@extends('layout1')

@section('seoTitle')
All Services
@endsection

@section('content')

<section style="padding: 200px 200px;
        display: block;">
    <h2 class="about-title featured-text text-center">Our Products</h2>
    <div class="container mb-3">
        <div class="row menu" style="float: right;">
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

                @foreach ($date as $date )
                <div class="col">
                    <div class="card text-center" style="width: 18rem;">
                        <div class="card-header">
                        </div>
                        <img src="../images/prod.webp" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="col">
                                <div class="d-flex mt-3 align-items-center">
                                    <a href="/services/{{ $date->id }}" class="text-dark">
                                        <h5 class="card-title">{{ $date->name }} </h5>
                                    </a>
                                    <h5 class="card-title price ml-auto">{{ $date->price }}$</h5>
                                </div>
                            </div>
                            <p class="card-text">{{ $date->description }}</p>
                        </div>
                        <div class="card-footer text-muted">
                        <add-to-cart-button :product-id="{
                                id: {{ $date->id }},
                                name: '{{ $date->name }}',
                                price: '{{$date->price }}'
                            }"> </add-to-cart-button>                            </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endsection
