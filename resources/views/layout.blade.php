<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title') | Admin </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .navbar-brand {
            font-weight: bold;
        }
        .sidebar {
            min-height: 100vh;
            background-color: #343a40;
            padding-top: 1rem;
        }
        .sidebar a {
            color: #ffffff;
            padding: 0.5rem 1rem;
            display: block;
            text-decoration: none;
        }
        .sidebar a:hover {
            background-color: #495057;
        }
    </style>
</head>
<body>

<div class="d-flex">
    {{-- Sidebar --}}
    <div class="sidebar">
        <a href="{{ route('products.index') }}">Dashboard</a>
        <a href="{{ route('products.create') }}">Tambah Produk</a>
    </div>

    {{-- Main content --}}
    <div class="flex-grow-1 p-4">
        <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm mb-4">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Admin Dashboard</a>
            </div>
        </nav>

        <div class="container-fluid">
            <h4 class="mb-3">@yield('title')</h4>

            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            @yield('content')
        </div>
    </div>
</div>

</body>
</html>
