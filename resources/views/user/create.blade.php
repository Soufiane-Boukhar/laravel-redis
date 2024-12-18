@extends('layouts.app')

@section('title', 'Create User')

@section('content')
    <div class="d-flex justify-content-center align-items-center vh-100">
        <div class="form-container border p-4 rounded shadow">
            <h1 class="mb-4 text-center">Create User</h1>

            <form action="{{ route('user.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name:</label>
                    <input type="text" name="name" id="name" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" name="email" id="email" class="form-control" required>
                </div>

                <button type="submit" class="btn btn-primary w-100">Create User</button>
            </form>
        </div>
    </div>
@endsection
