@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 mt-5">
            <img src="{{ $product->picture }}" alt="{{ $product->title }}" width="500px" class="img-fluid">
        </div>
        <div class="col-md-6 mt-5">
            <h1>{{ $product->title }}</h1>
            <p class="text-muted">{{ $product->description }}</p>
            <p class="mb-4">Price: ${{ $product->price }}</p>

            <div class="mb-4">
                <label for="quantity">Quantity:</label>
                <div class="quantity-input">
                    <button class="decrement" data-item-id="{{ $product->id }}">-</button>
                    <input type="number" class="quantity" value="1" data-item-id="{{ $product->id }}" data-price="{{ $product->price }}" min="1">
                    <button class="increment" data-item-id="{{ $product->id }}">+</button>
                </div>
            </div>

            <form method="POST" action="{{ route('cart.add', ['id' => $product->id]) }}">
                @csrf
                <button type="submit" class="btn btn-primary">Add to Cart</button>
            </form>

            <a href="{{ route('home') }}" class="btn btn-secondary mt-3">Back to Home</a>
            <div class="mt-5">
                <h3>About the product</h3>
                <p>{{ $product->description }}</p>
            </div>
        </div>

    </div>

</div>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const quantityInput = document.querySelector('.quantity');
        const decrementButton = document.querySelector('.decrement');
        const incrementButton = document.querySelector('.increment');

        decrementButton.addEventListener('click', function () {
            const currentQuantity = parseInt(quantityInput.value);
            if (currentQuantity > 1) {
                quantityInput.value = currentQuantity - 1;
            }
        });

        incrementButton.addEventListener('click', function () {
            const currentQuantity = parseInt(quantityInput.value);
            quantityInput.value = currentQuantity + 1;
        });
    });
</script>

@endsection
