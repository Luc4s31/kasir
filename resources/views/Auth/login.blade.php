@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-lg">
                <div class="card-body">
                    <h3 class="text-center mb-4">Login</h3>
                    <form method="POST" action="{{Route('login')}}">
                        @csrf
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" name="username" class="form-control">
                        </div>
                    
                        <div class="mb-3">
                            <label for="pin" class="form-label">PIN</label>
                            <input type="text" name="pin" class="form-control">
                            </div>
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div>
                    
                        
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
