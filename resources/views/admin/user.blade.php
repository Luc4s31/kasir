@extends('layouts.app')

@section('title', 'User')

@section('content')
@include("components.navbar-admin")
<div class="py-4">
    <div class="container">
        <div class="row">
            <div class="col-12 mb-3">
                <a class="btn btn-primary" href="{{ route('add.users') }}">Tambah User</a>
            </div>
            <div class="col-12">
                <div class="row">
                    @foreach ($users as $user)
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <div class="card-header">
                                {{ $user->username }}
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Role: {{ $user->role }}</h5>
                                <div class="btn-group" role="group">
                                    <a href="{{ route('edit.users', $user->id) }}" class="btn btn-warning">
                                        <i class="bi bi-pencil"></i>
                                    </a>
                                    <a href="{{ route('delete.users', $user->id) }}" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this user?');">
                                        <i class="bi bi-trash"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
