<?php
/*
    Template Name: inscription
    Template Post Type: post, page, product
    */
get_header(); ?>
<div>
 <h2>Inscrivez-vous</h2>
 <form action="/inscription.php" method="POST">
 	<div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email" required>
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="pass" required minlength="3">
    </div>
    <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <div class="form-group text-right">  
            <button type="submit" class="btn btn-primary" id="bouton">Submit</button>
    </div>

 </form>
</div>
 <?php
get_footer();?>