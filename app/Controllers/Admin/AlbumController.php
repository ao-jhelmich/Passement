<?php

namespace App\Controllers\Admin;

use App\Models\Album\Album;
use App\Controllers\Controller;
use App\Models\Album\Album_DAO;
use App\Models\Genre\Genre_DAO;
use App\Models\Artist\Artist_DAO;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \App\Services\View
     */
    public function index()
    {
        $albums = (new Album_DAO)->getAll();

        return view('admin.albums.index', compact('albums'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \App\Services\View
     */
    public function create()
    {
        $artists = (new Artist_DAO)->getAll();
        $genres = (new Genre_DAO)->getAll();

        return view('admin.albums.create', compact('artists', 'genres'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \App\Services\View
     */
    public function store()
    {
        $name = $_POST['name'] ?? null;
        $img_link = $_POST['img_link'] ?? null;
        $artist_id = $_POST['artist_id'] ?? null;
        $genres = $_POST['genres'] ?? null;

        if (! $name || ! $img_link || ! $artist_id || ! $genres) {
            return redirect('/admin/albums/create');
        }

        $new_album = new Album;
        $new_album->name = $name;
        $new_album->img_link = $img_link;
        $new_album->artist_id = $artist_id;

        (new Album_DAO)->create($new_album);

        $latest_album = (new Album_DAO)->getLatest();

        if ($genres) {
            $latest_album->connectGenres($genres);
        }

        return redirect('/admin/albums');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return redirect
     */
    public function destroy()
    {
        $id = $_POST['id'];

        (new Album_DAO)->delete($id);

        return redirect('/admin/albums');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \App\Services\View
     */
    public function edit($id)
    {
        $album = (new Album_DAO)->getById($id);
        $artists = (new Artist_DAO)->getAll();
        $genres = (new Genre_DAO)->getAll();

        return view('admin.albums.edit', compact('album', 'artists', 'genres'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return redirect
     */
    public function update()
    {
        $id = $_POST['id'] ?? null;
        $name = $_POST['name'] ?? null;
        $img_link = $_POST['img_link'] ?? null;
        $artist_id = $_POST['artist_id'] ?? null;
        $genres = $_POST['genres'] ?? [];

        if (! $name || ! $img_link || ! $artist_id) {
            return redirect("/admin/albums/edit/{$id}");
        }

        $new_album = new Album;
        $new_album->id = $id;
        $new_album->name = $name;
        $new_album->img_link = $img_link;
        $new_album->artist_id = $artist_id;

        (new Album_DAO)->update($new_album);

        $album = (new Album_DAO)->getById($id);

        if ($genres) {
            $album->syncGenres($genres);
        }

        return redirect('/admin/albums');
    }

    /**
     * Display the specified resource.
     *
     * @return \App\Services\View
     */
    public function show($id)
    {
        //
    }
}
