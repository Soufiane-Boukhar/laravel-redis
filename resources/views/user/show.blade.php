<!-- resources/views/user/details.blade.php -->
@extends('layouts.app')

@section('title', 'User Details')

@section('content')
    <div class="user-details">
        <h1>User Details</h1>
        <p><strong>Name:</strong> {{ $user->name }}</p>
        <p><strong>Email:</strong> {{ $user->email }}</p>
        <p><strong>Cache Status:</strong> 
            @if(Cache::has("user_{$user->id}"))
                <span class="status">Cached in Redis</span>
            @else
                <span class="status">Fetched from MySQL</span>
            @endif
        </p>

        <a href="/">Go Back</a>
    </div>
@endsection
