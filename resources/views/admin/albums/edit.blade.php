@extends('layouts.admin')

@section('admin_content')
    <form action="/admin/albums/edit" method="POST">
        <div class="card">
            <div class="card-body">
                <input type="hidden" name="id" value="{{ $album->id }}">

                @include('admin.albums.form')
            </div>
        </div>
    
        <div class="d-flex justify-content-end w-100 mt-3">
            <button type="submit" class="btn btn-success">Save album</button>
        </div>
    </form>
@endsection