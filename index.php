<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Splend
 */


   get_header();


   ?>


   <div class="section hero_part inner_global">
     <div class="container">
       <div class="sides">
         <div class="left">
           <h1><?php the_title(); ?></h1>
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
