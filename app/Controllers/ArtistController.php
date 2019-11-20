<?php

namespace App\Controllers;

use App\Controllers\Controller;
use App\Models\Artist\Artist_DAO;

class ArtistController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @return \App\Services\View
     */
    public function index($id)
    {
        $artist = (new Artist_DAO)->getById($id);

        return view('artist.index', compact('artist'));
    }
}
