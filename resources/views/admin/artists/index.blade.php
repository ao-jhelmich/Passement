@extends('layouts.admin')

@section('admin_content')
    <div class="card">
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($artists as $artist)
                        <tr>
                            <th>{{ $artist->id }}</th>
                            <td>{{ $artist->name }}</td>
                            <td class="d-flex justify-content-center">
                                <form action="/admin/artists/delete" method="POST">
                                    <input type="hidden" name="id" value="{{ $artist->id }}">

                                    <button class="btn btn-danger" type="submit">Delete</button>
                                </form>

                                <a class="btn btn-warning text-white ml-3" href="/admin/artists/edit?id={{ $artist->id }}">Edit</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="d-flex justify-content-end w-100 mt-3">
        <a class="btn btn-primary" href="/admin/artists/create" role="button">Add artist</a>
    </div>
@endsection