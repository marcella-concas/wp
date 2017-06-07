 <?php get_header(); ?>
 <div class="row">
 	<div class="col-md-12 Benvenuti">
 	<h1><?php bloginfo(name) ?></h1>
 		<h4><?php bloginfo(description) ?> </h4>
 	</div>
 </div>


 <!--form begin-->
 
 	<div class="row text-center" id="mymenu">


  </div>
  <div class="row form-row">
    <form>
      <?php echo do_shortcode('[contact-form-7 id="4" title="Contact form 1"]'); ?>
 	</form>
 </div>
</div> 
<?php get_footer();  ?>