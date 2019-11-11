@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-center">
        <div class="col-3 my-4">
            @include('partials.menu')
        </div>

        <div class="col-9">
            <div class="my-4">
                @yield('admin_content')
            </div>
        </div>					
    </div>
@endsection