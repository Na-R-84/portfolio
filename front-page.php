<?php get_header();?>
<?php
      $image =      get_field('bild');
      $first =      get_field('txt');
      $second =     get_field('text2');
      $third =      get_field('text3');
      $link =       get_field('text4');
      $rubrik =     get_field('rubrik');
      $title =      get_the_title(7);
      $heroImg =    get_field('hero');
      $herorubrik1 =    get_field('herorubrik1');
      $herorubrik2 =    get_field('herorubrik2');

?>

  <?php
    if($heroImg) :?>
    <section class="hero" style="background-image: url(<?php echo $heroImg['url'] ;?>);">
      <?php else :?>
      <section class="hero pattern" >

      <?php endif; ?>
        <div class="hero-content">
            <h2><?php echo $herorubrik1;?></h2>
            <h2><?php echo $herorubrik2;?></h2>
            <!-- <h2><?php bloginfo('description');?></h2> -->

        </div>
    </section>
   
  <section class="main-container">
      <h2 class="txt">Projekter</h2>
      <div class="card-container">
      <?php
        $args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'posts_per_page'=> 3,
        'order'=>'DESC', //Högsta till lägsta ID, ASC
        'orderby'=>'ID',
        );
        $the_query = new WP_Query($args);
        ////////////////////////////////////IF START
        if($the_query -> have_posts()) :
          while($the_query -> have_posts()) :
            $the_query -> the_post();
        ///////////////////////////////////LOOP START
            // $count = $the_query -> found_posts;
            // $index = $the_query ->current_post+1; 
      ?>
        <article class="card ">
            <a href="<?php the_permalink();?>">
                <figure>
                    <?php the_post_thumbnail();?>
                </figure>
                <!-- här vet man ju att man ska visa 4, så de kan man hårdkoda -->
                <h3><?php the_title();?></h3>
                <p><?php the_excerpt(); ?></p> 
            </a>
        </article> 
        <?php 
        endwhile;
        wp_reset_postdata();
      ////////////////////////////////LOOP STOP
      else : ?>
        <p class="obs"><?php esc_html_e('Det finns inga inlägg');?></p>
      <?php
      endif;
      ////////////////////////////////////IF STOP
      ?>
      </div>
      <section class="invisible-InMobil">
        <h2 class="txt"><?php echo $rubrik; ?></h2>
        <section class="invisible-content">
          <div class="text">
            <h2><?php print_r($first); ?></h2>
            <h2><?php echo $second; ?></h2>
            <h2><?php echo $third; ?></h2>
            <a href="<?php echo site_url($title); ?>" class="more"><?php echo $link; ?></a> 
          </div>
          <div class="img">
          <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"  />
          </div>
        </section>

      </section>
  </section>
  <?php get_footer(); ?>