<?php get_header();
    if(have_posts()):
    while(have_posts()):
    the_post();
    
    //Loop start
?>

  <section class="about-container">
      <div class="title">
        <h2><?php the_title(); ?></h2>
      </div>
      <article class="page-content">
        <!-- <h4>LITTE MER PERSONLIGT OM MIG</h4> -->
            <figure>
              <?php the_post_thumbnail();?>
            </figure>

          <div class="text-box">
           <?php the_content(); ?>
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