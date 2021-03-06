@extends('layouts.pagelayout')
@section('content')
<div class="container-fluid">
    <h1 class="mt-4">Contact Us</h1>
    <div class="row">
        <div class="col-md-6">
            {{-- map here --}}
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3819.55925295254!2d96.14731621582318!3d16.798589723937898!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1eb5e3fffe455%3A0xb7d3ad319654cf6e!2sShwedagon%20Pagoda!5e0!3m2!1sen!2smm!4v1630920705936!5m2!1sen!2smm" width="600" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <div class="col-md-6">
            <!-- Default form login -->
<form class="text-center border border-light p-5" action="#!">

    <p class="h4 mb-4">Contact Us</p>

    <!-- UserName -->
    <input type="text" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Username">


    <!-- Email -->
    <input type="email" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="E-mail">

    {{-- Message --}}
    <textarea name="" id="" cols="30" rows="10" class="form-control mb-4">Type you are Message</textarea>

    <!-- Send in button -->
    <button class="btn btn-info btn-block my-4" type="submit">Send Message</button>


</form>
<!-- Default form login -->
        </div>
    </div>
</div>
@endsection
