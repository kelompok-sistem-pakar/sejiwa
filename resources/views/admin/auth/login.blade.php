@extends('layouts.app')

@section('title', 'Admin Login')

@section('content')
<div class="d-flex align-items-center justify-content-center" style="min-height:75vh;">
    <div class="card shadow-sm w-100" style="max-width:420px;">
        <div class="card-body p-4">
            <h3 class="mb-4 text-center">Login Admin</h3>

            @if ($errors->any())
            <div class="alert alert-danger">{{ $errors->first() }}</div>
            @endif

            <form method="POST" action="{{ route('admin.login.submit') }}">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Username</label>
                    <input type="text" name="username" class="form-control" required autofocus>
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
                <button class="btn btn-success w-100">Login</button>
            </form>
        </div>
    </div>
</div>
@endsection