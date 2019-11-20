<?php

namespace App\Controllers\Admin;

use App\Models\Genre\Genre;
use App\Controllers\Controller;
use App\Models\Genre\Genre_DAO;

class GenreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \App\Services\View
     */
    public function index()
    {
        $genres = (new Genre_DAO)->getAll();

        return view('admin.genres.index', compact('genres'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \App\Services\View
     */
    public function create()
    {
        return view('admin.genres.create');
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
            return $this->redirectWithError('admin.genres.create', 'Please fill both inputs');
        }

        $new_genre = new Genre;
        $new_genre->name = $name;
        
        (new Genre_DAO)->create($new_genre);

        return redirect('/admin/genres');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return redirect
     */
    public function destroy()
    {
        $id = $_POST['id'];

        (new Genre_DAO)->delete($id);

        return redirect('/admin/genres');
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @return \App\Services\View
     */
    public function edit($id)
    {
        $genre = (new Genre_DAO)->getById($id);

        return view('admin.genres.edit', compact('genre'));
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
            return $this->redirectWithError('admin.genres.edit', 'Please fill both inputs');
        }

        $new_genre = new Genre;
        $new_genre->id = $id;
        $new_genre->name = $name;

        $genre = (new Genre_DAO)->update($new_genre);

        return redirect('/admin/genres');
    }
}