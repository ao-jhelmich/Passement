<?php

namespace App\Models;

use PDO;

class Base_DAO
{
    protected $connection;

    public function __construct()
    {   
        // 
    }

    public function setConnection()
    {
        $username = DB_USER;
        $host = DB_HOST;
        $password = DB_PASS;
        $db = DB_NAME;
        
        try {
            $connection = new PDO('mysql:host='.$host.';dbname='.$db, $username, $password);
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->connection = $connection;
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
            exit;
        }
    }

    private function getConnection()
    {
        if (!$this->connection) {
            $this->setConnection();
        }

        return $this->connection;
    }

    public function execute($sql, $params = [], $custom_class = '', $all = false)
    {
        try {
            $stmt = $this->getConnection()->prepare($sql);
        } catch (\Exception $th) {
            throw $th;
        }

        if (strpos($sql, 'SELECT') !== false) {
            $stmt->setFetchMode(PDO::FETCH_CLASS, $custom_class);
        }

        foreach ($params as $name => $value) {
            $stmt->bindValue(':' . $name, $value);
        }
        
        $stmt->execute();
        
        if (strpos($sql, 'SELECT') !== false) {
            if ($all) {
                $result = $stmt->fetchAll();
            } else {
                $result = $stmt->fetch();
            }
        }
        
        return $result ?? true;
    }
}