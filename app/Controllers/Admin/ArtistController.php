<?php

namespace App\Controllers\Admin;

use App\Models\Artist\Artist;
use App\Controllers\Controller;
use App\Models\Artist\Artist_DAO;

class ArtistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \App\Services\View
     */
    public function index()
    {
        $artists = (new Artist_DAO)->getAll();

        return view('admin.artists.index', compact('artists'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \App\Services\View
     */
    public function create()
    {
        return view('admin.artists.create');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \App\Services\View
     */
    public function store()
    {
        $name = $_POST['name'];
        
        if (!$name) {
            return $this->redirectWithError('admin.artists.create', 'Please fill both inputs');
        }

        $new_artist = new Artist;
        $new_artist->name = $name;
        
        (new Artist_DAO)->create($new_artist);

        return redirect('/admin/artists');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return redirect
     */
    public function destroy()
    {
        $id = $_POST['id'];

        (new Artist_DAO)->delete($id);

        return redirect('/admin/artists');
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @return \App\Services\View
     */
    public function edit($id)
    {
        $artist = (new Artist_DAO)->getById($id);

        return view('admin.artists.edit', compact('artist'));
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

        if (!$name || !$id) {
            return $this->redirectWithError('admin.artists.edit', 'Please fill both inputs');
        }

        $new_artist = new Artist;
        $new_artist->id = $id;
        $new_artist->name = $name;

        $artist = (new Artist_DAO)->update($new_artist);

        return redirect('/admin/artists');
    }
}