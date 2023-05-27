@extends('Components.main')

@section('content')
<h2 class="text-center text-danger my-5">welcome to product page!</h2>
<div class="container">
    <div class="row">
        @foreach ($products as $product )
        <div class="col-md-3">
            <div class="card">
                <img src="{{ asset("$product->image") }}" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">{{ $product->name }}</h5>
                <p class="card-text">{{  $product->desc }}</p>
                <p class="card-text">{{  $product->category->name }}</p>
                <a href="#" class="btn btn-primary">Details</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
