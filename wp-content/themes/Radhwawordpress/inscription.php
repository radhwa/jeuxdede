

<?php
/*
    Template Name: inscription
    Template Post Type: post, page, product
    */
get_header();?>
<div>
   <?php
   if(isset($msgErreur)){echo $msgErreur;}elseif (isset($msgSuccess)) {echo $msgSuccess;
   }
   ?>

</div>
<div>
 <h2>Inscrivez-vous</h2>
 <form action="<?php echo get_permalink(56);?>" method="POST">
 	<div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" name="email" required>
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="pass" placeholder="Password" name="pass" required minlength="3">
    </div>
    <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <div class="form-group text-right">  
            <button type="submit" class="btn btn-primary" id="bouton" name="submit">Submit</button>
    </div>

 </form>
</div>
 <?php
get_footer();?>