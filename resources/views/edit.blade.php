@extends('layouts.main')
<!--content is use as a id of dynamic part of page-->
@section('dynamiccontent')


@if($errors->any())
@foreach($errors->all() as $error)
<div class="container" style="padding-top:5px;">
<div class="alert alert-danger" role="alert">
  {{ $error }}
</div>
</div>
@endforeach
@endif
<!-- Material form register -->
<div class="container" style="padding:20px 0px">
<h1>Update Record</h1>
{{ csrf_field() }}
<div class="card">

    
    <h5 class="card-header black white-text text-center py-4">
        <strong>Edit Record</strong>
    </h5>

    <!--Card content-->
    <div class="card-body px-lg-5 pt-0">

        <!-- Form -->
        <!-- In action Route is use store function which come from studentController page-->
        <form class="text-center" style="color: #757575;" action="{{ route('update',$student->id) }}" method="POST">

        {{ csrf_field() }}

            <div class="form-row">
                <div class="col">
                    <!-- First name -->
                    <div class="md-form">
                        <input type="text" id="materialRegisterFormFirstName" value="{{ $student->first_name }}" name="fname" class="form-control">
                        <label for="materialRegisterFormFirstName">First name</label>
                    </div>
                </div>
                <div class="col">
                    <!-- Last name -->
                    <div class="md-form">
                        <input type="text" id="materialRegisterFormLastName" value="{{ $student->last_name }}" name="lname" class="form-control">
                        <label for="materialRegisterFormLastName">Last name</label>
                    </div>
                </div>
            </div>

            <!-- E-mail -->
            <div class="md-form mt-0">
                <input type="email" id="materialRegisterFormEmail" value="{{ $student->email }}" name="email" class="form-control">
                <label for="materialRegisterFormEmail">E-mail</label>
            </div>

            <!-- Phone number -->
            <div class="md-form">
                <input type="text" id="materialRegisterFormPhone" value="{{ $student->phone }}" name="phone" class="form-control" aria-describedby="materialRegisterFormPhoneHelpBlock">
                <label for="materialRegisterFormPhone">Phone number</label>
            </div>

       
            <!-- Sign up button -->
            <button class="btn btn-danger btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">Add</button>

            <!-- Social register -->
            <p>or sign up with:</p>

            <a type="button" class="btn-floating btn-fb btn-sm">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a type="button" class="btn-floating btn-tw btn-sm">
                <i class="fab fa-twitter"></i>
            </a>
            <a type="button" class="btn-floating btn-li btn-sm">
                <i class="fab fa-linkedin-in"></i>
            </a>
            <a type="button" class="btn-floating btn-git btn-sm">
                <i class="fab fa-github"></i>
            </a>

            <hr>

            <!-- Terms of service -->
            <p>By clicking
                <em>Sign up</em> you agree to our
                <a href="" target="_blank">terms of service</a>

        </form>
        <!-- Form -->

    </div>

</div>
</div>
<!-- Material form register -->
@endsection