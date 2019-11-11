@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-center">
        <div class="card col-4">
            <div class="card-body">
                <h4 class="card-title">Login</h4>
                
                <form method="POST" action="/login">
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                    </div>

                    <div class="form-group">
                        <a href="/register">Dont have an account? Register.</a>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
            </div>
        </div>
    </div>
@endsection