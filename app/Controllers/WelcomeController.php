<?php

namespace App\Controllers;

use App\Models\Album\Album_DAO;
use App\Models\Artist\Artist_DAO;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $albums = (new Album_DAO)->getAll(10);
        $artists = (new Artist_DAO)->getAll();
        $welcome_album = (new Album_DAO)->getLatest();

        return view('welcome', compact('albums', 'artists', 'welcome_album'));
    }
}
