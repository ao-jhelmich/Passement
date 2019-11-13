@extends('layouts.admin')

@section('admin_content')
    <div class="card">
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>img</th>
                        <th>Name</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($albums as $album)
                        <tr>
                            <th>{{ $album->id }}</th>
                            <td>
                                <img src="{{ $album->img_link }}" height="50px" width="50px">
                            </td>
                            <td>{{ $album->name }}</td>
                            <td class="d-flex justify-content-center">
                                <form action="/admin/albums/delete" method="POST">
                                    <input type="hidden" name="id" value="{{ $album->id }}">

                                    <button class="btn btn-danger" type="submit">Delete</button>
                                </form>

                                <a class="btn btn-warning text-white ml-3" href="/admin/albums/edit?id={{ $album->id }}">Edit</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="d-flex justify-content-end w-100 mt-3">
        <a class="btn btn-primary" href="/admin/albums/create" role="button">Add album</a>
    </div>
@endsection