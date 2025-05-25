@extends('layout')

@section('title', 'Edit Product')

@section('content')
    <div class="card">
        <div class="card-header">Edit Product</div>
        <div class="card-body">
            <form action="{{ route('products.update', $product) }}" method="POST">
                @csrf
                @method('PUT')
                @include('products.form', ['product' => $product])
                <button class="btn btn-primary">Update</button>
                <a href="{{ route('products.index') }}" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
@endsection
