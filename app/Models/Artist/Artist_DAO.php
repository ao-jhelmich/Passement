<?php

namespace App\Models\Artist;

use App\Models\Base_DAO;

class Artist_DAO extends Base_DAO
{
    public function getAll()
    {
        $sql = "SELECT * FROM `artists`";

        return $this->execute($sql, [], \App\Models\Artist\Artist::class, true);
    }

    public function create(Artist $artist)
    {
        $sql = "INSERT INTO `artists` (`name`)
                VALUES (:name)";

        $params = [
            'name' => $artist->name,
        ];
        
        return $this->execute($sql, $params);
    }

    public function delete($id)
    {
        $sql = "DELETE FROM `artists`
                WHERE `id` = :id";

        $params = [
            'id' => $id,
        ];
        
        return $this->execute($sql, $params);
    }

    public function update($artist)
    {
        $sql = "UPDATE `artists`
                SET `name` = :name
                WHERE `id`=:id ";

        $params = [
            'id' => $artist->id,
            'name' => $artist->name,
        ];
        
        return $this->execute($sql, $params);
    }

    public function getById($id)
    {
        $sql = "SELECT * FROM `artists` WHERE `id` = :id";

        $params = [
            'id' => $id
        ];

        return $this->execute($sql, $params, \App\Models\Artist\Artist::class);
    }
}