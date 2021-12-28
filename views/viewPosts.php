<?php foreach($posts as $post): ?>
    <h2> <?= $post->getText() ?> </h2>
    <time> <?= $post->getDate() ?> </time>
<?php  endforeach; ?>

<h3>Ca marche !</h3>
