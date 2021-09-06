@extends('layouts.pagelayout')
@section("content")

    <div class="container">
    <h1 class="mt-4 mb-5">User Profile</h1>
    <!-- Default form login -->
    <form class="border border-light p-5" action="#!">
        <!-- UserName -->
        <label>UserName</label>
        <input
            type="text"
            id="defaultLoginFormEmail"
            class="form-control mb-4"
        />
        {{-- Email --}}
        <label>Email</label>
        <input
            type="email"
            id="defaultLoginFormEmail"
            class="form-control mb-4"
        />

        <!-- Password -->
        <label for="">Photo</label>
        <input
            type="file"
            id="defaultLoginFormPassword"
            class="form-control mb-4"
            placeholder="Password"
        />

        <label>Old Password</label>
        <input
            type="password"
            id="defaultLoginFormEmail"
            class="form-control mb-4"
        />

        <label>New Password</label>
        <input
            type="password"
            id="defaultLoginFormEmail"
            class="form-control mb-4"
        />

        <!-- Sign in button -->
        <button class="btn btn-info btn-block my-4" type="submit">
            Add Post
        </button>
    </form>
    <!-- Default form login -->
</div>
@endsection
