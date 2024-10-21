@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="my-4">Shopping Cart</h1>

    {{-- @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif --}}

    @if (!empty($cart))
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Total</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cart as $id => $item)
                <tr>
                    <td>
                        {{-- <img src="{{ asset('storage/' . $item['image_url']) }}" alt="{{ $item['name'] }}" width="50">
                        {{ $item['name'] }} --}}
                        <img src="https://picsum.photos/200/300" class="rounded-circle" alt="{{ $item['name'] }}" width="50" height="50">
                        {{ $item['name'] }}
                    </td>
                    <td>
                        <!-- Update Quantity Form -->
                        <form action="{{ route('cart.update', $id) }}" method="POST">
                            @csrf
                            <input type="number" name="quantity" value="{{ $item['quantity'] }}" min="1">
                            <button type="submit" class="btn btn-sm btn-primary">Update</button>
                        </form>
                    </td>
                    <td>${{ $item['price'] }}</td>
                    <td>${{ $item['price'] * $item['quantity'] }}</td>
                    <td>
                        <a href="{{ route('cart.remove', $id) }}" class="btn btn-danger btn-sm">Remove</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>Your cart is empty.</p>
    @endif

</div>
@endsection
