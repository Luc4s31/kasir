@extends('layouts.app')

@section('title', 'Tambah User')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4 class="mb-0">Tambah User Baru</h4>
                </div>
                <div class="card-body">
                    <form class="row g-3" action="{{ route('store.users') }}" method="POST">
                        @csrf
                        <div class="col-12">
                            <label for="inputUsername" class="form-label">Nama</label>
                            <input type="text" name="username" class="form-control" id="inputUsername" placeholder="Masukkan Nama User" required>
                        </div>
                        <div class="col-md-6">
                            <label for="inputPin" class="form-label">PIN</label>
                            <input type="password" name="pin" class="form-control" id="inputPin" placeholder="Masukkan PIN" required>
                        </div>
                        <div class="col-md-6">
                            <label for="userRole" class="form-label">Role</label>
                            <select name="role" class="form-select" aria-label="Default select example">
                                <option selected>Select Role</option>
                                <option value="staff">Staff</option>
                                <option value="admin">Admin</option>
                            </select>
                        </div>
                        <div class="col-12 text-center">
                            <button type="submit" class="btn btn-primary">Tambahkan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
