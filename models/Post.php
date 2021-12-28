<?php

class Post {
    private $_id
    private $_user
    private $_text
    private $_date

    //CONSTRUCTEUR
    public function __construct(array $data) {
        $this->hydrate($data)
    }

    //HYDRATATION
    public function hydrate(array $data) {
        foreach ($data as $key => $value) {
            $method = 'set'.ucfirst($key);
            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }

    //SETTERS
    public function setId($id) {
        $id = (int) $id;
        if($id > 0) {
            $this->_id = $id;
        };
    }

    public function setUser($user) {
        $user = (int) $user;
        if($id > 0) {
            $this->_user = $user;
        };
    }

    public function setText($text) {
        if(is_string($title)) {
            $this->_text = $text;
        };
    }

    public function setDate($date) {
        $this->_date = $date;

    }

    //GETTERS
    public function id() {
        return $this->_id;
    }

    public function user() {
        return $this->_user;
    }

    public function text() {
        return $this->_text;
    }

    public function date() {
        return $this->_date;
    }
}
}