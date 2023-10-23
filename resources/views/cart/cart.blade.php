@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Your Shopping Cart</h1>
        @if (count($cartItems) > 0)
            <table class="table">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Product Image</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Total</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cartItems as $productId => $item)
                        @php
                            $product = \App\Models\Cart::find($item['product_id']);
                        @endphp
                        <tr>
                            <td>
                                @if ($product)
                                    {{ $product->title }}
                                @else
                                    Product Not Found
                                @endif
                            </td>
                            <td>
                                @if ($product)
                                    <img src="{{ $product->picture }}" style="width: 100px" alt="">
                                @else
                                    No Image Available
                                @endif
                            </td>
                            <td>{{ $item['quantity'] }}</td>
                            <td>
                                @if ($product)
                                    ${{ $product->price }}
                                @else
                                    Price not available
                                @endif
                            </td>
                            <td>
                                @if ($product)
                                    ${{ $item['quantity'] * $product->price }}
                                @else
                                    Total not available
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('cart.remove', ['id' => $productId]) }}">Remove</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <p>Total: ${{ $total }}</p>
        @else
            <p>Your cart is empty.</p>
        @endif
    </div>
@endsection
