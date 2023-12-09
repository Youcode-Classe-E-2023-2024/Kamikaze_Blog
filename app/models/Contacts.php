<?php

class Contacts
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }
    public function infoAvito(){
        $this->db->query('SELECT * FROM infoavito ');
        if($this->db->execute()){
          
           $info = $this->db->resultSet();
           return $info;
        }else{
            die("Error in infoavito");
        }

    }
    public function Message($data)
    {

        if (!empty($data)) {

            $this->db->query('INSERT INTO `contact_client`(`name`, `email`, `message`) VALUES(:name, :email, :message)');
            $this->db->bind(':name', $data['name']);
            $this->db->bind(':email', $data['email']);
            $this->db->bind(':message', $data['message']);
            if ($this->db->execute()) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
}
