@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-center">
        <div class="card col-4">
            <div class="card-body">
                @if (isset($error))
                    <div class="alert alert-danger">
                        {{ $error }}
                    </div>
                @endif
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
                        <a href="/register">Maak een account aan.</a>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection