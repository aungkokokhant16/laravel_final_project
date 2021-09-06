@extends('layouts.authlayout')
@section("content")
    <!-- Default form login -->
    <div class="container">
        <div class="col-md-4 offset-4 mt-5">

            <form class="text-center border border-light p-5" action="#!">

                <p class="h4 mb-4 pink-text">Sign in</p>

                <!-- Email -->
                <input type="email" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="E-mail">

                <!-- Password -->
                <input type="password" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Password">

                <div class="d-flex justify-content-around">

                    <div>
                        <!-- Forgot password -->
                        <a href="">Forgot password?</a>
                    </div>
                </div>

                <!-- Sign in button -->
                <button class="btn btn-danger btn-block my-4" type="submit">Sign in</button>

                <!-- Register -->
                <p>Not a member?
                    <a href="{{route("register")}}">Register</a>
                </p>

                <!-- Social login -->

            </form>

        </div>
    </div>

<!-- Default form login -->
@endsection

