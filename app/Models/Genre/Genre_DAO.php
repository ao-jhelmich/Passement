<?php

namespace App\Models\Genre;

use App\Models\Base_DAO;

class Genre_DAO extends Base_DAO
{
    public function getAll()
    {
        $sql = "SELECT * FROM `genres`";

        return $this->execute($sql, [], \App\Models\Genre\Genre::class, true);
    }

    public function create(Genre $genre)
    {
        $sql = "INSERT INTO `genres` (`name`)
                VALUES (:name)";

        $params = [
            'name' => $genre->name,
        ];
        
        return $this->execute($sql, $params);
    }

    public function delete($id)
    {
        $sql = "DELETE FROM `genres`
                WHERE `id` = :id";

        $params = [
            'id' => $id,
        ];
        
        return $this->execute($sql, $params);
    }

    public function update($genre)
    {
        $sql = "UPDATE `genres`
                SET `name` = :name
                WHERE `id`=:id ";

        $params = [
            'id' => $genre->id,
            'name' => $genre->name,
        ];
        
        return $this->execute($sql, $params);
    }

    public function getById($id)
    {
        $sql = "SELECT * FROM `genres` WHERE `id` = :id";

        $params = [
            'id' => $id
        ];

        return $this->execute($sql, $params, \App\Models\Genre\Genre::class);
    }
}