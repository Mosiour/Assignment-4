@extends('layouts.app')

@section('content')
<h1>{{ $product->name }}</h1>
<p>ID: {{ $product->product_id }}</p>
<p>Description: {{ $product->description }}</p>
<p>Price: ${{ $product->price }}</p>
<p>Stock: {{ $product->stock }}</p>
<p>Image URL: {{ $product->image }}</p>

<a href="{{ route('products.index') }}">Back to Products</a>