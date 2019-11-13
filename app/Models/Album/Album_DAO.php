<?php

namespace App\Models\Album;

use App\Models\Base_DAO;

class Album_DAO extends Base_DAO
{
    public function getAll($limit=null)
    {
        $sql = "SELECT * FROM `albums`";
        
        if ($limit) {
            $sql .= " LIMIT ". $limit;
        }
        
        return $this->execute($sql, [], \App\Models\Album\Album::class, true);
    }

    public function create(Album $album)
    {
        $sql = "INSERT INTO `albums` (`name`, `img_link`, `artist_id`)
                VALUES (:name, :img_link, :artist_id)";

        $params = [
            'name' => $album->name,
            'img_link' => $album->img_link,
            'artist_id' => $album->artist_id,
        ];
        
        return $this->execute($sql, $params);
    }

    public function delete($id)
    {
        $sql = "DELETE FROM `albums`
                WHERE `id` = :id";

        $params = [
            'id' => $id,
        ];
        
        return $this->execute($sql, $params);
    }

    public function update($album)
    {
        $sql = "UPDATE `albums`
                SET `name` = :name, `img_link` = :img_link, `artist_id` = :artist_id
                WHERE `id`=:id ";

        $params = [
            'id' => $album->id,
            'name' => $album->name,
            'img_link' => $album->img_link,
            'artist_id' => $album->artist_id,
        ];
        
        return $this->execute($sql, $params);
    }

    public function getById($id)
    {
        $sql = "SELECT * FROM `albums` WHERE `id` = :id";

        $params = [
            'id' => $id
        ];

        return $this->execute($sql, $params, \App\Models\Album\Album::class);
    }

    public function getLatest()
    {
        $sql = "SELECT * FROM `albums` ORDER BY id DESC LIMIT 0, 1";

        return $this->execute($sql, [], \App\Models\Album\Album::class);
    }
}