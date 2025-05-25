@extends('layout')

<!-- @section('title', 'List Produk') -->

@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <span>Tampilan Semua</span>
            <a href="{{ route('products.create') }}" class="btn btn-primary btn-sm">Tambah Produk</a>
        </div>
        <div class="card-body">
            <table class="table table-striped table-bordered">
                <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Deskripsi Produk</th>
                    <th class="text-end">Harga</th>
                    <th width="140">Aksi</th>
                </tr>
                </thead>
                <tbody>
                @forelse ($products as $index => $product)
                    <tr>
                        <td>{{ $products->firstItem() + $index }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->description }}</td>
                        <td class="text-end">{{ number_format($product->price, 0) }}</td>
                        <td>
                            <a href="{{ route('products.edit', $product) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{ route('products.destroy', $product) }}" method="POST" class="d-inline" onsubmit="return confirm('Delete this product?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger">Del</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr><td colspan="5" class="text-center">No products found.</td></tr>
                @endforelse
                </tbody>
            </table>

            {{ $products->links('pagination::bootstrap-5') }}
        </div>
     
    </div>
@endsection
