@extends('layouts.app')

@section('title', 'Edit Product')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow">
                <div class="card-header">
                    <h4>Edit Product</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('update.products', $products->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="inputName" class="form-label">Product Name</label>
                            <input type="text" name="name" value="{{ $products->name }}" class="form-control" id="inputName" placeholder="Input your product">
                        </div>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="inputPrice" class="form-label">Price</label>
                                <input type="number" name="price" value="{{ $products->price }}" class="form-control" id="inputPrice" placeholder="Rp xxxx">
                            </div>
                            <div class="col-md-6">
                                <label for="inputStock" class="form-label">Stock</label>
                                <input type="number" name="stock" value="{{ $products->stock }}" class="form-control" id="inputStock" placeholder="Input stock">
                            </div>
                        </div>
                        <div class="mt-2 text-center">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
