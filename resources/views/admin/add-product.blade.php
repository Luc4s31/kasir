@extends('layouts.app')

@section('title', 'Tambah Produk')

@section('content')
    <form class="row g-3" action="{{ route('store.products') }}" method="POST">
        @csrf
        <div class="col-12">
            <label for="inputAddres@extends('layouts.app')

            @section('title', 'Tambah Produk')
            
            @section('content')
            <div class="container mt-5">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card shadow-sm">
                            <div class="card-header">
                                <h5 class="mb-0">Tambah Produk Baru</h5>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('store.products') }}" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="productNameInput" class="form-label">Nama Produk</label>
                                        <input type="text" name="name" class="form-control" id="productNameInput" placeholder="Masukkan Nama Produk" required>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="productPriceInput" class="form-label">Harga Produk</label>
                                            <input type="number" name="price" class="form-control" id="productPriceInput" placeholder="Rp xxxx" required>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="productStockInput" class="form-label">Stok Produk</label>
                                            <input type="number" name="stock" class="form-control" id="productStockInput" placeholder="Masukkan Stok" required>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary">Tambahkan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endsection
            s" class="form-label">Nama Produk</label>
            <input type="text" name="name" class="form-control" id="inputAddress" placeholder="Masukkan Nama Produk">
        </div>
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Harga Produk</label>
            <input type="number" name="price" class="form-control" id="inputEmail4" placeholder="Rp xxxx">
        </div>
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Stok Produk</label>
            <input type="number" name="stock" class="form-control" id="inputPassword4" placeholder="Masukkan Stok">
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Tambahkan</button>
        </div>
    </form>
@endsection