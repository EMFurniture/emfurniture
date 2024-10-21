@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="my-4">All Products</h1>

    <div class="row">
        @foreach ($products as $product)
        <div class="col-md-4 mb-4">
            <div class="card">
                <!-- Check if image exists and display it -->
                @if($product->image_url)
                <img src="{{ asset('storage/' . $product->image_url) }}" class="card-img-top" alt="{{ $product->product_name }}">
                @else
                {{-- <img src="{{ asset('images/default-product.png') }}" class="card-img-top" alt="No image available"> --}}
                <img src="https://picsum.photos/200/300" class="card-img-top" alt="No image available" height="200">
                @endif

                <div class="card-body">
                    <h5 class="card-title">{{ $product->product_name }}</h5>
                    <p class="card-text">
                        Category: {{ $product->category->category_name }} <br>
                        Supplier: {{ $product->supplier->supplier_name }} <br>
                        Price: ${{ $product->price }} <br>
                        Dimensions: {{ $product->dimensions }} <br>
                        Material: {{ $product->material }} <br>
                        Weight: {{ $product->weight }} kg
                    </p>
                    <p class="card-text"><small class="text-muted">In stock: {{ $product->stock_quantity }}</small></p>
                     <!-- Add to Cart Button -->
                     <a href="{{ route('cart.add', $product->id) }}" class="btn btn-primary">Add to Cart</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
