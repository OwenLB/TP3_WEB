<?php

class ControllerIndex {
    private $_postManager;
    private $_view;

    public function __construct($url) {
        if(isset($url) && count($url) > 1) {
            throw new Exception('Page introuvale');
        } else {
            $this->posts();
        }
    }

    private function posts() {
        $this->_postManager = new PostManager();
        $posts = $this->_postManager->getPost();

        require_once('../views/viewPosts.php');
    }

}

?>