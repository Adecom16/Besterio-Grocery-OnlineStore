
@extends('adminlayouts.app')
@vite(['resources/sass/app.scss', 'resources/css/app.css', 'resources/js/app.js'])
@section('content')
<title>Besterio Admin Add Product</title>


    @if($errors->any())

         @foreach ($errors->all() as $error)

           {{-- <p>{{ $error }}</p> --}}
         @endforeach


    @endif
    {{-- <section class="heg"></section> --}}
    <section class="center ">
        <div class="form">

            @if(session('success'))
    <script>
        alert('{{ session('success') }}');
    </script>
@endif

        <form action="{{ Route('product.post') }}" method="post">
            @csrf
            @method('post')
            <h1>Add Product</h1>
            <label for="">Product Title</label><br>
            <input size="43" type="text" name="title" id=""  required>
             @error('title') <p style="color: red;"> {{ $message }} </p>   @enderror
            <br>
            <label for="">Product Image</label><br>
            <input size="43" type="text" name="picture" id="" required>
            @error('picture') <p style="color: red;"> {{ $message }} </p>   @enderror
            <br>
            <label for="">Product Quantity</label><br>
            <input size="43" type="text" name="quantity" id="" required>
            @error('quantity') <p style="color: red;"> {{ $message }} </p>   @enderror
            <br>
            <label for="">Product Price</label><br>
            <input size="43" type="text" name="price" id="" required>
            @error('price') <p style="color: red;"> {{ $message }} </p>   @enderror
            <br>
            <label for="">Product Features</label><br>
            <textarea style="width:340px;" name="description" id="" required></textarea>
            @error('description') <p style="color: red;"> {{ $message }} </p>   @enderror
            {{-- <label for="">Product Oldprice</label><br>
            <input size="43" type="text" name="oldprice" id="" required>
            @error('oldprice') <p style="color: red;"> {{ $message }} </p>   @enderror
            <br>
            <label for="">Product Company</label><br>
            <input size="43" type="text" name="company" id="" required>
            @error('company') <p style="color: red;"> {{ $message }} </p>   @enderror
            <br>
            <label for="">Product category</label><br>
            <input size="43" type="text" name="category" id="" required>
            @error('category') <p style="color: red;"> {{ $message }} </p>   @enderror
            <br> --}}
            {{-- <label for="">Product Identity Number</label><br>
            <input size="43" type="text" name="producttage" id="" required>
            @error('producttage') <p style="color: red;"> {{ $message }} </p>   @enderror

            <br>
            <label for="">Product Description</label><br>
            <textarea style="width:340px;" name="fulldescription" id="" required></textarea>
            @error('fulldescription') <p style="color: red;"> {{ $message }} </p>   @enderror
            <br>
            <label for="">Product Related Images</label><br>
            <textarea style="width:340px;" name="imagelinks" id="" required></textarea>
            @error('imagelinks') <p style="color: red;"> {{ $message }} </p>   @enderror
            <br> --}}
            <br>
            <input class="button" type="submit" value="Add product">
            <br>
            <br>
            <br>
        </form>
    </div>
    </section>
@endsection
