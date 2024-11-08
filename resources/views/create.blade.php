@extends('layouts.app')

@section('content')
<form action="{{ route('products.store') }}" method="POST">
    @csrf
    <label>Product ID</label>
    <input type="text" name="product_id" required>

    <label>Name</label>
    <input type="text" name="name" required>

    <label>Description</label>
    <textarea name="description"></textarea>

    <label>Price</label>
    <input type="number" name="price" step="0.01" required>

    <label>Stock</label>
    <input type="number" name="stock">

    <label>Image</label>
    <input type="text" name="image">

    <button type="submit">Create Product</button>
</form>