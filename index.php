
<?php get_header();?>

  <section class="index-container">
    <div class="heading">
    <!-- kan inte hämta med hjälp av the_title eftersom de hämtar inlägg -->

        <?php $our_title = get_the_title(get_option('page_for_posts',true)); ?>
        <h2><?php echo $our_title; ?></h2>
    </div>
    <nav class="category-menu">
      <!-- <ul class="categories cat-slider">
        <li>
            <a href="#">UX-design</a>
        </li>
        <li>
            <a href="#">Webb</a>
        </li>
        <li>
            <a href="#">Webbdesign</a>
        </li>
        
      </ul> -->
      <!-- översätt till WP -->
      <?php 
        wp_nav_menu(array(
          'theme_location' => 'categorymenu',
          'menu_class' => 'categories cat-slider'
        )); 
      ?>
    </nav>      
 

    <div class="card-container">
      <?php 
        if(have_posts()) :
        //--------------------------------IF START
            while(have_posts()) :
                the_post();
        //--------------------------LOOP START
      ?>
        <article class="card">
           <a href="<?php the_permalink();?>">
              <figure>
               <?php the_post_thumbnail();?>
              </figure>
              <h3><?php the_title();?></h3>
              <p><?php the_excerpt(); ?></p>
            </a>
        </article>
      <?php
      //------------------------------LOOP SLUT
          endwhile;
      else : ?>
          <p><?php esc_html_e( 'Tyvärr finns det inga inlägg!' ); ?></p>
      <?php endif;
      //----------------------------------------IF SLUT
      ?>

  </div>

</section>
<?php get_footer(); ?>