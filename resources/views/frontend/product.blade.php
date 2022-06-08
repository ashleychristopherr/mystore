@extends('layouts.frontend')

@section('title', 'Products')

@section('content')

    <div class="container products">

        <div class="row">
        @foreach($medicine as $li)
            <div class="col-xs-18 col-sm-6 col-md-3">
                <div class="thumbnail">
                    <img src="{{ asset('img/'.$li->img) }}" width="500" height="300">
                    <div class="caption">
                        <h4>{{ $li->generic_name }}</h4>
                        <p>{{ Str::limit(strtolower($li->description), 50) }}</p>
                        <p><strong>Price: </strong> Rp. {{$li->price }}</p>
                        <p class="btn-holder"><a href="{{ url('add-to-cart/'.$li->id) }}" class="btn btn-warning btn-block text-center" role="button">Add to cart</a> </p>
                    </div>
                </div>
            </div>
        @endforeach
            <div class="col-xs-18 col-sm-6 col-md-3">
                <div class="thumbnail">
                    <img src="http://placehold.it/500x300" alt="">
                    <div class="caption">
                        <h4>Product name</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, soluta, eligendi doloribus sunt minus amet sit debitis repellat. Consectetur, culpa itaque odio similique suscipit</p>
                        <p><strong>Price: </strong> 567.7$</p>
                        <p class="btn-holder"><a href="#" class="btn btn-warning btn-block text-center" role="button">Add to cart</a> </p>
                    </div>
                </div>
            </div>

            <div class="col-xs-18 col-sm-6 col-md-3">
                <div class="thumbnail">
                    <img src="http://placehold.it/500x300" alt="">
                    <div class="caption">
                        <h4>Product name</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, soluta, eligendi doloribus sunt minus amet sit debitis repellat. Consectetur, culpa itaque odio similique suscipit</p>
                        <p><strong>Price: </strong> 567.7$</p>
                        <p class="btn-holder"><a href="#" class="btn btn-warning btn-block text-center" role="button">Add to cart</a> </p>
                    </div>
                </div>
            </div>

            <div class="col-xs-18 col-sm-6 col-md-3">
                <div class="thumbnail">
                    <img src="http://placehold.it/500x300" alt="">
                    <div class="caption">
                        <h4>Product name</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, soluta, eligendi doloribus sunt minus amet sit debitis repellat. Consectetur, culpa itaque odio similique suscipit</p>
                        <p><strong>Price: </strong> 567.7$</p>
                        <p class="btn-holder"><a href="#" class="btn btn-warning btn-block text-center" role="button">Add to cart</a> </p>
                    </div>
                </div>
            </div>

        </div><!-- End row -->

    </div>

@endsection