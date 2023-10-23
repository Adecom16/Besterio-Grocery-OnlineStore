<!-- resources/views/products/show.blade.php -->
<h1>{{ $product->name }}</h1>
<p>{{ $product->description }}</p>

<form action="{{ route('products.addRelated', ['id' => $product->id]) }}" method="post">
    @csrf
    <label for="related_product_ids">Select Related Products:</label>
    <select name="related_product_ids[]" multiple>
        @foreach ($products as $relatedProduct)
            <option value="{{ $relatedProduct->id }}">{{ $relatedProduct->name }}</option>
        @endforeach
    </select>
    <button type="submit">Add Related Products</button>
</form>
