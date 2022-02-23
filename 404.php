<?php
/*
Template Name:404
*/
  get_header();

  $id = 292;
  $rubrik = get_field('rubrik', $id);
  $img = get_field('image', $id);
  $txt= get_field('txt',$id);
 
   
?>
  
  <div class="error-container">
    <h2 class="obs"><?php echo $rubrik; ?></h2>
    <div >
    <img class="error-img" src="<?php echo esc_url($img['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"  />
    </div>

    <h3><?php echo $txt; ?></h3>
    <!-- använda --&nbsp;-- för att få lite luft mellan texten och ikonen  -->
    <a href="<?php echo home_url();?>" class="back-home"><i class="fa fa-arrow-left"></i>&nbsp; Back to Home Page</a>
  </div>

  <?php get_footer(); ?>