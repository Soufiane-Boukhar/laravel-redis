# Laravel User Management with Redis

This project demonstrates a Laravel application for managing users (create and show functionalities), integrated with Redis for caching.

## Features

1. **User Creation**  
   A form to create new users, storing them in the database.

2. **User Details Page**  
   Displays user information, cached using Redis to improve performance.

3. **Redis Integration**  
   Utilized for caching user data to reduce database queries.

---

## Prerequisites

Make sure you have the following installed:

- PHP (>= 8.0)
- Composer
- Laravel Framework (>= 9.x)
- Redis Server
- Redis PHP Extension (`php-redis`)

---

## Installation

1. Clone the repository:
    ```bash
    git clone https://github.com/yourusername/laravel-redis-example.git
    cd laravel-redis-example
    ```

2. Install dependencies:
    ```bash
    composer install
    ```

3. Set up your `.env` file:
    ```bash
    cp .env.example .env
    ```

4. Configure your Redis setup in `.env`:
    ```dotenv
    CACHE_DRIVER=redis
    REDIS_HOST=127.0.0.1
    REDIS_PASSWORD=null
    REDIS_PORT=6379
    ```

5. Migrate the database:
    ```bash
    php artisan migrate
    ```

6. Start the Redis server:
    ```bash
    redis-server
    ```

7. Run the application:
    ```bash
    php artisan serve
    ```

---

## Endpoints

### 1. **Create User**
**Route:** `POST /user`  
**Description:** Submits a form to create a new user.

#### Blade Template: `resources/views/user/create.blade.php`

```php
@extends('layouts.app')

@section('title', 'Create User')

@section('content')
<div class="form-container">
    <h1>Create User</h1>
    <form action="{{ route('user.store') }}" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>
        <button type="submit">Create User</button>
    </form>
</div>
@endsection
