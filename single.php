<?php get_header();?>
<section class="single-container">
        
    <?php 
        if(have_posts()) :
            //----------------IF START
        while(have_posts()) :
                the_post();
        //-----------------------LOOP START
    ?>
    <div class="heading">
        <h2><?php the_title();?></h2>
    </div>
        <!-- snabbt och enkelt sätt att ta fram automatisk ul lista med kat -->
    <div class="cat-btn">
        <?php echo get_the_category_list();?>
    </div>
        
    <section  class="project-container">
        <div class="project-content">
            <article class="card">
                <figure>
                    <?php the_post_thumbnail(); ?>
                </figure>
                <?php 
                $link = get_field('link');
                if( $link ): ?>
                   <a class="link" href="<?php echo $link['url'] ; ?>"><i class="fa fa-link"></i>Länk</a>
                <?php endif; ?>
            </article>
        </div>
        <article class="text-content">
            <div class="title">
                <h3> <?php echo get_field('rubrik'); ?></h3>
            </div>
            <div class="text-content-box">
                    <p><?php the_field('txtcontent');?></p>
            </div>

        </article>
    </section>
    <?php 
        //Ref till fälten
        $img1 = get_field('img_1');
        $img2 = get_field('img_2');
        $img3 = get_field('img_3');
        $imgtxt1 = get_field('imagetxt1');
        $imgtxt2 = get_field('imagetxt2');
        $imgtxt3 = get_field('imagetxt3');

        
    ?>
    <?php if($img1 && $img2 || $img3) : ?>

    <section class="image-container">
        
        <figure>
            <img src="<?php echo $img1['url']; ?>" alt="<?php echo $img1['alt']; ?>" />
            <figcaption><?php echo $imgtxt1; ?></figcaption>
        </figure>
        <figure>
            <img src="<?php echo $img2['url']; ?>" alt="<?php echo $img2['alt']; ?>" />
            <figcaption><?php echo $imgtxt2; ?></figcaption>
        </figure>
        <figure>
            <img src="<?php echo $img3['url']; ?>" alt="<?php echo $img2['alt']; ?>" />
            <figcaption><?php echo $imgtxt3; ?></figcaption>
        </figure>
    </section>
    <?php endif;?>

    <section class="btn-container">
        <?php 
            previous_post_link('%link','<i class="fa fa-chevron-circle-left"></i>
            Föregående</a>'); 
            next_post_link('%link','Nästa<i class="fa fa-chevron-circle-right"></i></a>');?>
    </section>
    
    <?php 
    //------------------------LOOP END
            endwhile;
        else : ?>
            <p><?php esc_html_e('Det finns inget innehåll!');?></p>
        <?php endif;
    //--------------------------IF END
    ?>
</section>
<?php get_footer();?>