<?php
class Database
{
    public $db;

    public function __construct()
    {
        try {
            $this->db = new PDO(
                'mysql:host=localhost;dbname=frugal_friend',
                'root',
                'welcome'

            );
        }

        catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}