@extends('layouts.authlayout')
@section("content")
    <!-- Default form register -->
    <div class="container">
        <div class="col-md-4 offset-4 mt-5">

            <!-- Material form register -->
<div class="card">

    <h5 class="card-header info-color white-text text-center py-4">
        <strong>Register</strong>
    </h5>

    <!--Card content-->
    <div class="card-body px-lg-5 pt-0">

        <!-- Form -->
        <form class="text-center" style="color: #757575;" action="#!">

            <div class="form-row">
                <div class="col">
                    <!-- First name -->
                    <div class="md-form">
                        <input type="text" id="materialRegisterFormFirstName" class="form-control">
                        <label for="materialRegisterFormFirstName">Username</label>
                    </div>
                </div>

            </div>

            <!-- E-mail -->
            <div class="md-form mt-0">
                <input type="email" id="materialRegisterFormEmail" class="form-control">
                <label for="materialRegisterFormEmail">E-mail</label>
            </div>

            <!-- Password -->
            <div class="md-form">
                <input type="password" id="materialRegisterFormPassword" class="form-control" aria-describedby="materialRegisterFormPasswordHelpBlock">
                <label for="materialRegisterFormPassword">Password</label>

            </div>

            <label for="">Select u r profile picture</label>
            <div class="md-form">
                <input type="file" id="materialRegisterFormPassword" class="form-control" aria-describedby="materialRegisterFormPasswordHelpBlock">


            </div>





            <!-- Sign up button -->
            <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">Register</button>

            <!-- Already Register -->
            <p>
                <a href="{{route("login")}}">Alerady Register?</a>
            </p>



        </form>
        <!-- Form -->

    </div>

</div>
<!-- Material form register -->

        </div>
    </div>
<!-- Default form register -->
@endsection

