@extends('layouts.app')

@section('title', 'Product')

@section('content')
@include("components.navbar-admin")
<div class="container mt-5">
    <div class="row mb-3">
        <div class="col">
            <a class="btn btn-primary" href="{{ route('add.products') }}">Tambah Produk</a>
        </div>
    </div>
    <div class="card shadow-sm">
        <div class="card-body">
            <table class="table table-striped">
                <thead class="table-success">
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Nama Produk</th>
                        <th scope="col">Stock</th>
                        <th scope="col">Harga</th>
                        <th scope="col" class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $item)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->stock }}</td>
                            <td>Rp {{ number_format($item->price, 2, ',', '.') }}</td>
                            <td class="text-center">
                                <a href="{{ route('edit.products', $item->id) }}" class="btn btn-warning btn-sm" title="Edit">
                                    <i class="bi bi-pencil"></i>
                                </a>
                                <a href="{{ route('delete.products', $item->id) }}" class="btn btn-danger btn-sm" title="Delete" onclick="return confirm('Apakah Anda yakin ingin menghapus produk ini?')">
                                    <i class="bi bi-trash"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
