@extends('adminlayouts.app')
@section('content')

<body class="container" style="">



  <section class="home " style="padding-top:30px">
    <h2 style="padding-left: 100px; ">products Page</h2>
    @if (count($products) > 0)


    <div class="container">
        <div class="row">
            @foreach ($products as $product)
            <div class="col-md-4 mb-4">
                <div class="card" style="height: 500px;">
                    <img src="{{ $product->picture }}" class="card-img-top" alt="{{ $product->title }}" style="width:40%;" >
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->title }}</h5>
                        <p class="card-text" style="font-size: 15px;">{{ $product->description }}</p>
                        <p class="card-text">{{ $product->quantity }}</p>
                        <p class="card-text">Price: {{ $product->price }}</p>
                    </div>
                    <div class="card-footer">
                        <a href="{{ url('admin/product', $product->id) }}" class="btn btn-primary btn-sm">
                            <i class="fa fa-edit"></i> Edit
                        </a>
                        <form action="{{ route('product.delete') }}" method="post" class="d-inline">
                            @method('delete')
                            @csrf
                            <input type="hidden" name="id" value="{{ $product->id }}">
                            <button type="submit" class="btn btn-danger btn-sm">
                                <i class="fa fa-trash"></i> Delete
                            </button>
                        </form>

                          <!-- Add to Cart Form -->
                          {{-- <form method="POST" action="{{ route('cart.add', ['id' => $product->id]) }}">
                            @csrf
                            <button type="submit" class="btn btn-primary">Add to Cart</button>
                        </form> --}}

                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    @else
    <p style="padding-left: 20px">No products available</p>
    @endif

  </section>

  {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> --}}

</body>
@endsection
