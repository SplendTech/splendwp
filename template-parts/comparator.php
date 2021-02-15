<div class="section options">
  <div class="container">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tooltipster/4.2.8/js/tooltipster.bundle.min.js" integrity="sha512-ZKNW/Nk1v5trnyKMNuZ6kjL5aCM0kUATbpnWJLPSHFk/5FxnvF9XmpmjGbag6BEgmXiz7rL6o6uJF6InthyTSg==" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tooltipster/4.2.8/css/tooltipster.bundle.min.css" integrity="sha512-RwhQzi0EhwZ9hHs18SqM7ICqW/MH/B17PouhdCuzaUQYEdx2S4WPgkhLeZPvGr2Kb1FIm4gaIbMJGwZtxDCLQA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tooltipster/4.2.8/css/plugins/tooltipster/sideTip/themes/tooltipster-sideTip-noir.min.css" integrity="sha512-tchn9NuzRDznhEDU/xukcTQknA8QtplCrosswSN2xDVeAuHISdJkTCAPXbnbqRv1XUV2GfieCrtdyGbcS+lE0Q==" crossorigin="anonymous" />
    <div class="option_box box1">
      <div class="sides">
        <div class="left">
          <h2><?php the_field( "dyi_title", "option" ); ?></h2>
          <p class="paragraph">
            <?php the_field( "dyi_subtitle", "option" ); ?>
          </div>
          <div class="right sides">
            <div class="columns">
              <div class="table_headers third">
                <span class="empty">&nbsp;</span>
                <span>Car model</span>
                <span class="big">Car ownership <span class="info tooltip" title="Weekly payments towards owning your car over a 4-year term. At the end of the term, the car will hold a residual value. For example; Kia Sportage SUV, after a 4-year term the estimated residual value based on age and kilometers driven is between $8,000 - $12,000. ">?</span></span>
                <span>Dedicated support <span class="info tooltip" title="Splend provides every member with a dedicated Member Success Representative to ensure you earn more and improve your rating.">?</span> </span>
                <span>Holiday payment <span class="info tooltip" title="With Splend’s Rent to own plan you can take a holiday from your weekly rental fee for up to four weeks. Read our FAQ for more information.">?</span> </span>
                <span>Good credit history <span class="info tooltip" title="Splend considers every application.DIY finance requires a credit checks prior to approval.">?</span> </span>
                <span>Minimum contract <span class="info tooltip" title="The minimum rental period is 12 weeks. You can hand the car back after this time no termination fee.">?</span> </span>
                <span class="big toggle_on_click">Weekly payment</span>
                <span class="starts_hidden">Car payment <span class="info tooltip" title="DIY pricing estimation based on a 2019 Kia Sportage Si driveaway RRP cost of $33,990 (as at 1 June 2019). Pricing based on a 12% interest rate with weekly repayments and no residual/balloon payment at the end of the contact. This payment does not include the upfront loan establishment fees that may be charged by financial institutions.">?</span> </span>
                <span class="starts_hidden">Rideshare insurance <span class="info tooltip" title="DIY pricing estimation based on a 31 year old male who has held a drivers licence for 12 years and has had no insurance claims in the last three years. Pricing based on a 12 month-policy, paid monthly, for comprehensive rideshare insurance of a 2019 Kia Sportage Si that resides in Auburn NSW. The pricing assumes an excess premium of $1,745 and the distance travelled per year is greater than 20,000 kilometres per year.">?</span> </span>
                <span class="starts_hidden">Servicing <span class="info tooltip" title="DIY pricing estimation based on Kia’s scheduled servicing to 180,000km as per the manufacturer's guidelines.">?</span> </span>
                <span class="starts_hidden">Maintenance <span class="info tooltip" title="DIY pricing estimation based on the following replacement parts over a four year term;<br>12 tyres<br>3 front and rear wheel alignments<br>12 brake pads<br>12 brake discs<br>9 windscreen wiper blades<br>2 sets of headlight globes<br>1 battery">?</span></span>
                <span class="starts_hidden">Registration & CTP <span class="info tooltip" title="DIY pricing estimation based on a 2019 Kia Sportage Si with registration and CTP costs averaged across all States.">?</span> </span>
                <span class="starts_hidden">Rideshare admin <span class="info tooltip" title="DIY pricing estimation factoring in vehicle rideshare licensing and inspection costs averaged across all States.">?</span> </span>
              </div>

                <?php if ( have_rows('dyi', 'option') ): ?>
                    <?php while ( have_rows('dyi', 'option') ) : the_row(); ?>
                        <div class="table_item third">
                            <span class="big_title"><?php the_sub_field('name'); ?></span>
                            <span><?php the_sub_field('car_model'); ?></span>
                            <span><?php if ( get_sub_field( 'car_ownership' ) ): ?><i class="fas fa-check"></i><?php else: ?><i class="fas fa-times"></i><?php endif; ?></span>
                            <span><?php if ( get_sub_field( 'dedicated_support' ) ): ?><i class="fas fa-check"></i><?php else: ?><i class="fas fa-times"></i><?php endif; ?></span>
                            <span><?php if ( get_sub_field( 'holiday_payment' ) ): ?><i class="fas fa-check"></i><?php else: ?><i class="fas fa-times"></i><?php endif; ?></span>
                            <span><?php the_sub_field('good_credit_history'); ?></span>
                            <span><?php the_sub_field('minimum_contract'); ?></span>
                            <span class="big"><?php the_sub_field('weekly_payment'); ?></span>
                            <span class="starts_hidden"><?php the_sub_field('car_payment'); ?></span>
                            <span class="starts_hidden"><?php the_sub_field('rideshare_insurance'); ?></span>
                            <span class="starts_hidden"><?php the_sub_field('servicing'); ?></span>
                            <span class="starts_hidden"><?php the_sub_field('maintenance'); ?></span>
                            <span class="starts_hidden"><?php the_sub_field('registration_&_ctp'); ?></span>
                            <span class="starts_hidden"><?php the_sub_field('rideshare_admin'); ?></span>
                       </div>
                    <?php endwhile; ?>
                <?php endif; ?>
                </div>
              <a href="#" class="switch_to_splend"><?php the_field( "switch_to_splend", "option" ); ?></a>
          </div>
        </div>
      </div>
      <div class="option_box box2" style="display: none;">
        <div class="sides">
          <div class="left">
            <h2><?php the_field( "splend_title", "option" ); ?></h2>
            <p class="paragraph">
              <?php the_field( "splend_subtitle", "option" ); ?>
            </div>
            <div class="right sides">
              <div class="columns">
                <div class="table_headers third">
                  <span class="empty">&nbsp;</span>
                  <span>Car model</span>
                  <span class="big">Car ownership <span class="info tooltip" title="Weekly payments towards owning your car over a 4-year term. At the end of the term, the car will hold a residual value. For example; Kia Sportage SUV, after a 4-year term the estimated residual value based on age and kilometers driven is between $8,000 - $12,000. ">?</span></span>
                  <span>Dedicated support <span class="info tooltip" title="Splend provides every member with a dedicated Member Success Representative to ensure you earn more and improve your rating.">?</span> </span>
                  <span>Holiday payment <span class="info tooltip" title="With Splend’s Rent to own plan you can take a holiday from your weekly rental fee for up to four weeks. Read our FAQ for more information.">?</span> </span>
                  <span>Good credit history <span class="info tooltip" title="Splend considers every application.DIY finance requires a credit checks prior to approval.">?</span> </span>
                  <span>Minimum contract <span class="info tooltip" title="Splend Rent plan - minimum rental period is six weeks. You can hand the car back after this time with no termination fee.Splend Rent to own plan - minimum rental period between 12 and 26 weeks. You can hand the car back after this time with a termination fee of $500. After 52 weeks, if you choose to hand the car back, there is no termination fee.">?</span> </span>
                  <span class="big toggle_on_click">Weekly payment</span>
                  <span class="starts_hidden">Car payment <span class="info tooltip" title="DIY pricing estimation based on a 2019 Kia Sportage Si driveaway RRP cost of $33,990 (as at 1 June 2019). Pricing based on a 12% interest rate with weekly repayments and no residual/balloon payment at the end of the contact. This payment does not include the upfront loan establishment fees that may be charged by financial institutions.">?</span> </span>
                  <span class="starts_hidden">Rideshare insurance <span class="info tooltip" title="DIY finance estimation based on a 31 year old mate with a Toyota Prius 2015 1.8L 5dr or equivalent, have held a taxi licence for 3 years, have no claims or convictions in the past 5 years and have held a UK drivers licence for 3 years. <br><br>This price is only an estimate and the actual cost of your insurance policy might be different. Additional criteria may apply.">?</span> </span>
                  <span class="starts_hidden">Servicing <span class="info tooltip" title="DIY pricing estimation based on Kia’s scheduled servicing to 180,000km as per the manufacturer's guidelines.">?</span> </span>
                  <span class="starts_hidden">Maintenance <span class="info tooltip" title="DIY pricing estimation based on the following replacement parts over a four year term;<br>12 tyres<br>3 front and rear wheel alignments<br>12 brake pads<br>12 brake discs<br>9 windscreen wiper blades<br>2 sets of headlight globes<br>1 battery">?</span></span>
                  <span class="starts_hidden">Registration & CTP <span class="info tooltip" title="DIY pricing estimation based on a 2019 Kia Sportage Si with registration and CTP costs averaged across all States.">?</span> </span>
                  <span class="starts_hidden">Rideshare admin <span class="info tooltip" title="DIY pricing estimation factoring in vehicle rideshare licensing and inspection costs averaged across all States.">?</span> </span>
                </div>

                  <?php if ( have_rows('splend', 'option') ): ?>
                      <?php while ( have_rows('splend', 'option') ) : the_row(); ?>
                          <div class="table_item third">
                              <span class="big_title"><?php the_sub_field('name'); ?></span>
                              <span><?php the_sub_field('car_model'); ?></span>
                              <span><?php if ( get_sub_field( 'car_ownership' ) ): ?><i class="fas fa-check"></i><?php else: ?><i class="fas fa-times"></i><?php endif; ?></span>
                              <span><?php if ( get_sub_field( 'dedicated_support' ) ): ?><i class="fas fa-check"></i><?php else: ?><i class="fas fa-times"></i><?php endif; ?></span>
                              <span><?php if ( get_sub_field( 'holiday_payment' ) ): ?><i class="fas fa-check"></i><?php else: ?><i class="fas fa-times"></i><?php endif; ?></span>
                              <span><?php the_sub_field('good_credit_history'); ?></span>
                              <span><?php the_sub_field('minimum_contract'); ?></span>
                              <span class="big"><?php the_sub_field('weekly_payment'); ?></span>
                              <span class="starts_hidden"><?php the_sub_field('car_payment'); ?></span>
                              <span class="starts_hidden"><?php the_sub_field('rideshare_insurance'); ?></span>
                              <span class="starts_hidden"><?php the_sub_field('servicing'); ?></span>
                              <span class="starts_hidden"><?php the_sub_field('maintenance'); ?></span>
                              <span class="starts_hidden"><?php the_sub_field('registration_&_ctp'); ?></span>
                              <span class="starts_hidden"><?php the_sub_field('rideshare_admin'); ?></span>
                         </div>
                      <?php endwhile; ?>
                  <?php endif; ?>
                </div>
                <a href="#" class="switch_to_dyi"><?php the_field( "switch_to_dyi", "option" ); ?></a>
            </div>
          </div>
        </div>
    </div>
  </div>
</div>
<script type="text/javascript">
  $ = jQuery;
  $(document).on('ready', function(){
    $('.tooltip').tooltipster({
      theme: 'tooltipster-noir',
      maxWidth: 300,
      contentAsHTML: true,
    });
    $('.box1 .toggle_on_click').on('click', function(){
      $('.box1 .starts_hidden').toggleClass('opened');
      $(this).toggleClass('eminus');
    });
    $('.box2 .toggle_on_click').on('click', function(){
      $('.box2 .starts_hidden').toggleClass('opened');
      $(this).toggleClass('eminus');
    });
    $('.switch_to_splend').on('click', function(e){
      e.preventDefault();
      $('.box1').hide();
      $('.box2').show();
    })
    $('.switch_to_dyi').on('click', function(e){
      e.preventDefault();
      $('.box1').show();
      $('.box2').hide();
    })
  });
</script>
