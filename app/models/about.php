<?php


class About
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function cmnt_about()
    {
        $this->db->query('SELECT * FROM team ');
        if ($this->db->execute()) {
            return $this->db->resultSet();
        } else {

        }
    }
}