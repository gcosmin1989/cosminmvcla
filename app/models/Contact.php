<?php

class Contact{
    private $db;

    public function __construct(){
        $this->db= new Database();
    }
    public function addComment($data){

        $this->db->query('INSERT INTO contacts ( name, email, message)  VALUES(:name, :email, :message)');

        $this->db->bind(':name', $data['name']);
        $this->db->bind (':email', $data['email']);
        $this->db->bind(':message',$data['message']);

        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }
}
