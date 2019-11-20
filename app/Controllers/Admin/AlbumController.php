<?php

namespace App\Controllers\Admin;

use App\Models\Album\Album;
use App\Controllers\Controller;
use App\Models\Album\Album_DAO;
use App\Models\Artist\Artist_DAO;
use App\Models\Genre\Genre_DAO;

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
        $name = $_POST['name'];
        $img_link = $_POST['img_link'];
        $artist_id = $_POST['artist_id'];
        $genres = $_POST['genres'];
        
        if (!$name || !$img_link || !$artist_id || !$genres) {
            return $this->redirectWithError('admin.albums.create', 'Please fill all inputs');
        }

        $new_album = new Album;
        $new_album->name = $name;
        $new_album->img_link = $img_link;
        $new_album->artist_id = $artist_id;
        
        (new Album_DAO)->create($new_album);
        
        $latest_album = (new Album_DAO)->getLatest();

        $latest_album->connectGenres($genres);
        
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
        $id = $_POST['id'];
        $name = $_POST['name'];
        $img_link = $_POST['img_link'];
        $artist_id = $_POST['artist_id'];
        $genres = $_POST['genres'];

        if (!$name || !$id || !$img_link || !$artist_id || !$genres) {
            return $this->redirectWithError('admin.albums.edit', 'Please fill all inputs');
        }

        $new_album = new Album;
        $new_album->id = $id;
        $new_album->name = $name;
        $new_album->img_link = $img_link;
        $new_album->artist_id = $artist_id;

        (new Album_DAO)->update($new_album);

        $album = (new Album_DAO)->getById($id);
        
        $album->syncGenres($genres);

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