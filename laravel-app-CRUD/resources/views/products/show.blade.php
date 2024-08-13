<x-layout>

<h1>{{ $product->name }}</h1>

<p>{{ $product->description }}</p>

<p>{{ $product->size }}</p>

<div>
    <a href="{{ route('products.edit', $product->id) }}">Edit</a>
</div>
<div>
    <a href="{{ route('products.index') }}">Index</a>
</div>

<form method="POST", action="{{ route('products.destroy', $product) }}" >
    @csrf
    @method('DELETE')

    <button>Delete</button>
</form>

</x-layout>