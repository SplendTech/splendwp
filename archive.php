<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Splend
 */

  get_header();

  if ( is_category() ) {
              $title = single_cat_title( '', false );
          } elseif ( is_tag() ) {
              $title = single_tag_title( '', false );
          } elseif ( is_author() ) {
              $title = '<span class="vcard">' . get_the_author() . '</span>' ;
          } elseif ( is_tax() ) { //for custom post types
              $title = sprintf( __( '%1$s' ), single_term_title( '', false ) );
          } elseif (is_post_type_archive()) {
              $title = post_type_archive_title( '', false );
          }

  ?>


  <div class="section hero_part inner_global">
    <div class="container">
      <div class="sides">
        <div class="left">
          <h1><?php echo $title; ?></h1>
          <div class="paragraph">
 						<?php echo category_description(); ?>
 					</div>
        </div>
        <div class="right">
        </div>
      </div>
    </div>
    <style>
      .hero_part {
        background-image:url(<?php the_field( "blog_hero", 'option'); ?>);
      }
      @media(max-width:480px){
        .hero_part {
          background-image:url(<?php the_field( "blog_hero_fallback", 'option'); ?>);
        }
      }
    </style>
  </div>
 <div class="post_main">
<style media="screen">
  .archive_body .third {
    width:40%;float:left
  }
    .archive_body .twothirds {
      width:60%;float:right
    }
</style>
 	<div class="container">
 		<div class="archive_body">
        <div class="cat_filters">
          <?php


                $term = get_term_by('id', 6, 'category');
                echo '<li><a href="' . esc_url(get_category_link(6)) . '">' . $term->name . '</a></li>';

              $children = get_terms( $term->taxonomy, array(
                  'parent'    => $term->term_id,
                  'hide_empty' => false
              ) );

              if ( $children ) {
                  foreach( $children as $subcat )
                  {
                      echo '<li><a href="' . esc_url(get_term_link($subcat, $subcat->taxonomy)) . '">' . $subcat->name . '</a></li>';
                  }
              }
          ?>
        </div>
         <div class="all_services sides">
             <?php
               $paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;

               $args = array( 'category_name' => $category_name, 'posts_per_page' => 10,  'paged' => $paged );
               $loop = new WP_Query( $args );
               while ( $loop->have_posts() ) : $loop->the_post();
                 ?>
                 <div class="single_post sides">
                    <div class="third">
                       <h2><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h2>
                        <a class="btn btn_blog" href="<?php the_permalink(); ?>">Read More</a>
                    </div>
                    <div class="twothirds">
                      <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full'); ?></a>
                    </div>
                 </div>
                 <?php
               endwhile;
             ?>

           </div>
           <div class="my_pagination">
             <?php
             $big = 999999999; // need an unlikely integer

             echo paginate_links( array(
               'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
               'format' => '?paged=%#%',
               'current' => max( 1, get_query_var('paged') ),
               'total' => $loop->max_num_pages
             ) );
             ?>





           </div>


       </div>

   </div>
 </div>


 <?php get_footer(); ?>
