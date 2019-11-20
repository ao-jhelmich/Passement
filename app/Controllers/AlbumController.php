<?php

namespace App\Controllers;

use App\Controllers\Controller;
use App\Models\Album\Album_DAO;

class AlbumController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @return \App\Services\View
     */
    public function index($id)
    {
        $album = (new Album_DAO)->getById($id);

        return view('album.index', compact('album'));
    }
}