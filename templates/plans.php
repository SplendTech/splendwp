<?php
/*
*
* Template Name: Plans
*/

get_header(); ?>

<div class="section bg_part" style="background-image:url('<?php the_field('page_background') ?>')" >
  <div class="container">
    <div class="page_title_wrap">
      <?xml version="1.0" standalone="no"?>
      <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 20010904//EN"
       "http://www.w3.org/TR/2001/REC-SVG-20010904/DTD/svg10.dtd">
      <svg fill="#000000" version="1.0" xmlns="http://www.w3.org/2000/svg"
       width="280.000000pt" height="525.000000pt" viewBox="0 0 280.000000 525.000000"
       preserveAspectRatio="xMidYMid meet">
      <g transform="translate(0.000000,525.000000) scale(0.100000,-0.100000)" stroke="none">
      <path d="M464 4838 c-227 -227 -417 -423 -423 -435 -20 -40 -13 -96 18 -144
      16 -24 378 -393 805 -819 611 -611 776 -780 776 -800 0 -19 -168 -193 -789
      -815 -434 -434 -796 -804 -805 -822 -20 -40 -21 -95 -2 -131 8 -15 198 -210
      423 -435 l408 -407 736 737 c440 442 758 769 793 815 252 341 366 670 366
      1058 0 388 -114 717 -366 1058 -35 46 -352 372 -793 815 l-736 737 -411 -412z"/>
      </g>
      </svg>
      <h1><?php the_field('page_title') ?></h1>
    </div>
    <div class="plans_boxes">
      <div class="sides">
        <div class="left">
          <div class="title__wrap">
            <h2><?php the_field('plan1_title') ?></h2>
            <a href="#plan1">Details Below</a>
          </div>
          <p><?php the_field('plan1_description') ?></p>
          <a href="<?php the_field('plan1_url') ?>" class="btn btn_style1">Find out more</a>
        </div>
        <div class="right">
          <div class="title__wrap">
            <h2><?php the_field('plan2_title') ?></h2>
            <a href="#plan2">Details Below</a>
          </div>
          <p><?php the_field('plan2_description') ?></p>
          <a href="<?php the_field('plan2_url') ?>" class="btn btn_style1">Find out more</a>
        </div>
      </div>
    </div>
    <div class="plans_text">
      <p><?php the_field('about_plans') ?></p>
    </div>
    <div class="plans_description">
      <div class="sides">
        <div class="left" id="plan1">
          <h3><?php the_field('plan1_heading') ?></h3>
          <?php if ( have_rows('plan1_details') ): ?>
              <?php while ( have_rows('plan1_details') ) : the_row(); ?>
                <div class="single_plan_detail">
                  <h4> <?php the_sub_field('detail') ?></h4>
                  <p><?php the_sub_field('explanation') ?></p>
                </div>
              <?php endwhile; ?>
          <?php endif; ?>
        </div>
        <div class="right" id="plan2">
          <h3><?php the_field('plan2_heading') ?></h3>
          <?php if ( have_rows('plan2_details') ): ?>
              <?php while ( have_rows('plan2_details') ) : the_row(); ?>
                <div class="single_plan_detail">
                  <h4> <?php the_sub_field('detail') ?></h4>
                  <p><?php the_sub_field('explanation') ?></p>
                </div>
              <?php endwhile; ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="questions" style="background-image:url('<?php the_field('questions_background', 'option') ?>')" >
  <div class="container">
    <a href="<?php the_field( "button4_url", "option" ); ?>">Have more questions? See our FAQ</a>
  </div>

</div>
<?php get_footer(); ?>
<script>
  jQuery('.slick_testimonials').slick({
    dots: true,
    infinite: true,
    arrows:false,
    speed: 300,
    slidesToShow: 1,
    adaptiveHeight: true,
    autoplay: true,
    autoplaySpeed: 2000,
  });
</script>
