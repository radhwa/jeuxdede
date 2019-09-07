<?php
get_header(); ?>
<div class="blog-post">
 <!--  <h2 class="blog-post-title">Sample blog post</h2>
  <p class="blog-post-meta">January 1, 2014 by <a href="#">Mark</a></p>
 -->
	<div>
		  <p class="paragraphedemo">
		    Le jeu de rôle stimule l'imagination, la créativité, l'entraide et l'esprit de groupe, il renforce la confiance et favorise l'echange et le partage.  <br>
		    Il renforce la confiance et favorise l'échange et partage

		  </p>
	</div>
		
	<div class="sidebar-module" id="sidebarmenu2">
		    <h4>Contactez-nous</h4>
			<ol class="list-unstyled">
		    <li><a href="#">GitHub</a></li>
			<li><a href="#">Twitter</a></li>
			<li><a href="#">Facebook</a></li>
			</ol>
	</div>
	
		
		<div class="sidebar-module" id="sidebarmenu">
			    <h4>Nos nouveautés</h4>
			    <ol class="list-unstyled">
			    <!--   <?php wp_get_archives( 'type=monthly' ); ?> -->
			    <p>Bientôt notre nouveau jeu <span>"le marin"</span></p>
			      <!-- More archive examples -->
			    </ol>
		</div>

  	

  	<div>
		 <img src="<?php echo get_template_directory_uri(); ?>./cubesjeu.jpg" class="spacephoto"/>
	</div>

	<div>
	<a href="<?php echo get_permalink(51);?>"><button type="button" class="btn btn-primary" id="bouton"> Régles des jeux</button></a>
	
  	<a href="<?php echo get_permalink(45);?>"><button type="button" class="btn btn-primary">Commencer une partie</button></a>
  	</div>


  <!-- <hr /> -->

  <!-- the rest of the content -->
</div>
<!-- /.blog-post -->
 <?php
 //the_content();
 ?>

 <?php get_sidebar(); ?> 
<?php
get_footer();?>