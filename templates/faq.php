<?php
/*
*
* Template Name: FAQ
*/

get_header(); ?>

<div class="section hero_part inner_global">
  <div class="container">
    <div class="sides">
      <div class="left">
        <h1><?php the_title(); ?></h1>
      </div>
      <div class="right">
      </div>
    </div>
  </div>
  <style>
    .hero_part {
      background-image:url(<?php the_field( "hero_background" ); ?>);
    }
    @media(max-width:480px){
      .hero_part {
        background-image:url(<?php the_field( "hero_fallback" ); ?>);
      }
    }
  </style>
</div>

<div class="section faq_part">
  <div class="container">
    <?php if ( have_rows('categories') ): ?>
      <?php $i=0; ?>
      <div class="category_headers">
        <?php while ( have_rows('categories') ) : the_row(); ?>
          <?php $i++; ?>

            <span data-toggle="<?php echo $i ?>"><?php the_sub_field('category'); ?></span>

        <?php endwhile; ?>
      </div>
    <?php endif; ?>

    <div class="category_boxes">
      <?php if ( have_rows('categories') ): ?>
        <?php $i=0; ?>
          <?php while ( have_rows('categories') ) : the_row(); ?>
            <?php $i++; ?>
            <div class="category_box" data-display="<?php echo $i ?>">
              <h2><?php the_sub_field('category'); ?></h2>
                <div class="subcategory_box">
                  <?php if ( have_rows('subcategories') ): ?>
                      <?php while ( have_rows('subcategories') ) : the_row(); ?>
                        <div class="single_sub_box">
                          <h3><?php the_sub_field('subcategory_title') ?></h3>
                            <div class="subcategory_questions starts_hidden">
                              <?php if ( have_rows('questions') ): ?>
                                  <?php while ( have_rows('questions') ) : the_row(); ?>
                                    <div class="single_question">
                                      <h4><?php the_sub_field('question') ?></h4>
                                      <p><?php the_sub_field('answer') ?></p>
                                    </div>
                                  <?php endwhile; ?>
                              <?php endif; ?>
                            </div>
                        </div>
                      <?php endwhile; ?>
                  <?php endif; ?>
                </div>

            </div>
          <?php endwhile; ?>
      <?php endif; ?>
    </div>

  </div>
</div>


<div class="section colophon_boxes" style="background-image:url(<?php the_field( 'colophon_background', 'option' ); ?>)">
  <div class="container">
    <div class="sides">
      <div class="left">
        <a href="<?php the_field( "left_url", "option" ); ?>">
          <h3><?php the_field( "left_title", "option" ); ?></h3>
          <p><?php the_field( "left_text", "option" ); ?></p>
        </a>
      </div>
      <div class="right">
        <a href="<?php the_field( "right_url", "option" ); ?>">
          <h3><?php the_field( "right_title", "option" ); ?></h3>
          <p><?php the_field( "right_text", "option" ); ?></p>
        </a>
      </div>
    </div>

  </div>
</div>
<?php get_footer(); ?>
<script>
  jQuery('.video-gallery').lightGallery({controls:false, thumbnail:false});
</script>
