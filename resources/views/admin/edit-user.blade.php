@extends('layouts.app')

@section('title', 'Edit User')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header">
                    <h5 class="mb-0">Edit User: {{ $users->name }}</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('update.users', $users->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="usernameInput" class="form-label">Username</label>
                            <input type="text" name="username" class="form-control" id="usernameInput" value="{{ $users->name }}" placeholder="Masukkan Username" required>
                        </div>
                        <div class="mb-3">
                            <label for="pinInput" class="form-label">PIN Baru</label>
                            <input type="password" name="pin" class="form-control" id="pinInput" placeholder="Masukkan PIN Baru" required>
                            <div class="form-text">Masukkan PIN baru untuk user ini.</div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Update User</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
