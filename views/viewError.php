<h1 class="header">Saisissez votre message</h1>


<form method="post" action="./controllers/Posts.php">
    <input type="hidden" name="type" value="addPost">
    <input type="textarea" name="message" placeholder="Votre message...">
    <button type="submit" name="submit" class="btn btn-primary">Envoyer</button>
</form>

<div class="card">
  <h5 class="card-header">Featured</h5>
  <div class="card-body">
    <h5 class="card-title">Special title treatment</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>