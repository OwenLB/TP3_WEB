<?php
require_once '../libraries/Database.php';

class PostManager extends Model {

    // private $db;

    // public function __construct(){
    //     $this->db = new Database;
    // }

    public function getPosts() {
        return $this->getAll('posts', 'Post');
    }

    // //Add Post
    // public function addPost($data){
    //     $this->db->query('INSERT INTO messages (messageUser, messageText, messageDate) 
    //     VALUES (:messageUser, :messageText, :messageDate)');
    //     //Bind values
    //     $this->db->bind(':messageUser', $data['messageUser']);
    //     $this->db->bind(':messageText', $data['messageText']);
    //     $this->db->bind(':messageDate', $data['messageDate']);

    //     //Execute
    //     if($this->db->execute()){
    //         return true;
    //     }else{
    //         return false;
    //     }
    // }
}