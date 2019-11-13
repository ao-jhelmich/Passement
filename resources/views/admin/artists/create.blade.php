@extends('layouts.admin')

@section('admin_content')
    <form action="/admin/artists" method="POST">
        <div class="card">
            <div class="card-body">
                @include('admin.artists.form')
            </div>
        </div>
    
        <div class="d-flex justify-content-end w-100 mt-3">
            <button type="submit" class="btn btn-success">Save artist</a>
        </div>
    </form>
@endsection