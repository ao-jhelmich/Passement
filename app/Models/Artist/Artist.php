<?php

namespace App\Models\Artist;

use App\Models\Album\Album_DAO;

class Artist
{
    public $id;
    public $name;
    public $albums;

    public function getAlbums()
    {
        if (! $this->albums) {
            $this->albums = (new Album_DAO)->getAllByArtistId($this->id);
        }

        return $this->albums;
    }
}
