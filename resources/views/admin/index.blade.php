@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-center">
        <div class="card col-4">
            <div class="card-body">
                {{ user()->email }}
            </div>
        </div>
    </div>
@endsection