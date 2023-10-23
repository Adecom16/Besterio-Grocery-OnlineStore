@extends('adminlayouts.app')
@vite(['resources/sass/app.scss', 'resources/css/app.css', 'resources/js/app.js'])

@section('content')
    <section class="center">
        <div class="form">
        <form action="{{ Route('product.update') }}" method="post">
            @csrf
   <input size="43" type="hidden" name="id" value="{{ $products->id }}">

            @method('put')
            <h1>Edit Product</h1>
            <label for="">Product Title</label><br>
            <input size="43" type="text" name="title" id="" value="{{ $products->title }}"><br><br>
            <label for="">Product Image</label><br>
            <input size="43" type="text" name="picture" id="" value="{{ $products->picture }}"><br><br>
            <label for="">Product Quantity</label><br>
            <input size="43" type="text" name="quantity" id="" value="{{ $products->quantity }}"><br><br>
            <label for="">Product Price</label><br>
            <input size="43" type="text" name="price" id="" value="{{ $products->price }}"><br><br>
            <label for="">Product Description</label><br>
            <input size="43" type="text" name="description" id="" value="{{ $products->description }}"><br><br>
            <input class="button" type="submit" value="Add product">
        </form>
    </div>
    </section>

@endsection
