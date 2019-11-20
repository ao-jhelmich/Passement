<?php

namespace App\Models\Album;

class Album
{
    public $id;
    public $name;
    public $img_link;
    public $genres;

    public function getGenreNames()
    {
        $genres = $this->getGenres();

        $genre_names = [];

        foreach ($genres as $genre) {
            $genre_names[] = $genre->name;
        }

        return $genre_names;
    }

    public function connectGenres(array $genres)
    {
        foreach ($genres as $genre_id) {
            $this->connectGenre($genre_id);
        }
    }

    public function connectGenre($genre_id)
    {
        return (new Album_DAO)->connectGenre($this->id, $genre_id);
    }

    public function getGenres()
    {
        if (! $this->genres) {
            ! $this->genres = (new Album_DAO)->getConnectedGenres($this->id);
        }

        return $this->genres;
    }

    public function hasGenre($genre_id)
    {
        $genres = $this->getGenres();

        foreach ($genres as $genre) {
            if ($genre_id == $genre->id) {
                return true;
            }
        }

        return false;
    }

    public function syncGenres($genres)
    {
        (new Album_DAO)->deleteGenres($this->id);

        return $this->connectGenres($genres);
    }
}
