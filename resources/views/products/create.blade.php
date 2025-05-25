@extends('layout')

@section('title', 'Add Product')

@section('content')
    <div class="card">
        <div class="card-header">New Product</div>
        <div class="card-body">
            <form action="{{ route('products.store') }}" method="POST">
                @csrf
                @include('products.form')
                <button class="btn btn-success">Save</button>
                <a href="{{ route('products.index') }}" class="btn btn-secondary">Back</a>
            </form>
        </div>
    </div>
@endsection
