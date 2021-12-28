<?php 
    include_once 'header.php'
    // require_once('controllers/Router.php')

    // $router = new Router();
    // $router->RouteReq();
?>
    <div class="container">

    <h1 id="index-text">Welcome, <?php if(isset($_SESSION['usersId'])){
        echo explode(" ", $_SESSION['usersName'])[0];
    }else{
        echo 'Guest';
    }

    // include_once 'views/viewPosts.php'
    ?>
    </h1>

<?php
    include_once 'footer.php'
?>