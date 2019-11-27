@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-center">
        <div class="col-md-3 col-xs-1 my-4">
            @include('partials.menu')
        </div>

        <div class="col-md-9 col-xs-2">
            <div class="my-4">
                @yield('admin_content')
            </div>
        </div>					
    </div>
@endsection