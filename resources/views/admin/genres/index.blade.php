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
                    @foreach($genres as $genre)
                        <tr>
                            <th>{{ $genre->id }}</th>
                            <td>{{ $genre->name }}</td>
                            <td class="d-flex justify-content-center">
                                <form action="/admin/genres/delete" method="POST">
                                    <input type="hidden" name="id" value="{{ $genre->id }}">

                                    <button class="btn btn-danger" type="submit">Delete</button>
                                </form>

                                <a class="btn btn-warning text-white ml-3" href="/admin/genres/edit?id={{ $genre->id }}">Edit</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="d-flex justify-content-end w-100 mt-3">
        <a class="btn btn-primary" href="/admin/genres/create" role="button">Add genre</a>
    </div>
@endsection