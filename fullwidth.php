<!-- -------------------------------------------BlogPage -->
<?php 
    /*
    Template Name: Full Width page
    */
    get_header();
    if(have_posts()):
    while(have_posts()):
    the_post();
    
    //Loop start
?>

  <section class="fullwidth">
      <div class="title">
        <h2><?php the_title(); ?></h2>
      </div>
      <article class="page-content">
            <figure class="fullwidth-img" >
              <?php the_post_thumbnail();?>
            </figure>

          <div class="text-box">
            <?php
              $textbox1= get_field('textbox1');
              $textbox2= get_field('textbox2');       

            ?>
            <div class="box">
              <?php echo $textbox1; ?>
            </div>
            <div class="box">
            <?php echo $textbox2; ?>
            </div>
          </div>
        </article>
  </section>
<?php 
// Loop End
    endwhile;
    else: ?>
   <p><?php esc_html_e("Det finns inget innehåll")?></p>
    <?php endif;
?>
    
  <?php get_footer(); ?>