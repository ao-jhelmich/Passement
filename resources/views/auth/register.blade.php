@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-center">
        <div class="card col-4">
            <div class="card-body">
                <h4 class="card-title">Register</h4>

                <form method="POST" action="/register">
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                    </div>

                    <div class="form-group">
                        <label for="confirm_password">Confirm password</label>
                        <input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="Confirm password">
                    </div>

                    <div class="form-group">
                        <a href="/login">Already have an account? Login.</a>
                    </div>

                    <button type="submit" class="btn btn-primary">Register</button>
                </form>
            </div>
        </div>
    </div>
@endsection