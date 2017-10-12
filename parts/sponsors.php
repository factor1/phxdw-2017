<!--
Title Sponsor - Limit 1
Premier Sponsor - Limit 5
Premier Print and Large Format Sponsor - Limit 5
Leadership Sponsor
Industry Sponsor
Agency Sponsor
-->





<?php // Sponsors Container ?>
<section class="sponsors--container">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h2 class="">
          PHXDW is made possible by generous sponsors
        </h2>
      </div>
    </div>




    <?php // Title Sponsors

	    // Do we even have this as an option anymore?

    ?>
    <?php if(have_rows('title_sponsors', 'option')):?>

    <div class="row">
      <div class="col-12 text-center">
        <h4 class="sponsors--headline">
          Title Sponsors
        </h4>
      </div>
    </div>

      <div class="row row--justify-content-center">
        <?php while(have_rows('title_sponsors', 'option')): the_row();?>
          <div class="col-3 text-center sponsors--grid-item">
            <a href="<?php the_sub_field('sponsor_link');?>" target="_blank">
              <img src="<?php the_sub_field('sponsor_image');?>" alt="Sponsor Image">
            </a>
          </div>
        <?php endwhile;?>
      </div>

    <?php endif;?>




    <div class="row">
	<?php // Print Sponsors ?>
      <div class="col-6 text-center">
        <h4 class="sponsors--headline">
          Premier Print And Large Format Sponsor
        </h4>
        <?php while(have_rows('print_sponsors', 'option')): the_row();?>
          <div class="text-center sponsors--grid-item">
            <a href="<?php the_sub_field('sponsor_link');?>" target="_blank">
              <img src="<?php the_sub_field('sponsor_image');?>" alt="Sponsor Image">
            </a>
          </div>
        <?php endwhile;?>
      </div>


      <?php // Premier Sponsors ?>
      <div class="col-6 text-center">
        <h4 class="sponsors--headline">
          Premier Sponsors
        </h4>

        <?php while(have_rows('premier_sponsors', 'option')): the_row();?>
          <div class="text-center sponsors--grid-item">
            <a href="<?php the_sub_field('sponsor_link');?>" target="_blank">
              <img src="<?php the_sub_field('sponsor_image');?>" alt="Sponsor Image">
            </a>
          </div>
        <?php endwhile;?>
      </div>

    </div>





    <?php // Agency Sponsors ?>
    <?php if(have_rows('agency_sponsors', 'option')):?>
    <div class="row">
      <div class="col-12 text-center">
        <h4 class="sponsors--headline">
          Premier PHXDW Partners
        </h4>
      </div>
    </div>

      <div class="row row--justify-content-center row--align-items-center">
        <?php while(have_rows('agency_sponsors', 'option')): the_row();?>
          <div class="col-3 text-center sponsors--grid-item">
            <a href="<?php the_sub_field('sponsor_link');?>" target="_blank">
              <img src="<?php the_sub_field('sponsor_image');?>" alt="Sponsor Image">
            </a>
          </div>
        <?php endwhile;?>
      </div>
    <?php endif;?>



    <?php // Leadership Sponsors ?>
    <?php if(have_rows('leadership_sponsors', 'option')):?>
    <div class="row">
      <div class="col-12 text-center">
        <h4 class="sponsors--headline">
          AIGA AZ LEADERSHIP SPONSOR
        </h4>
      </div>
    </div>

      <div class="row row--justify-content-center row--align-items-center">
        <?php while(have_rows('leadership_sponsors', 'option')): the_row();?>
          <div class="col-3 text-center sponsors--grid-item">
            <a href="<?php the_sub_field('sponsor_link');?>" target="_blank">
              <img src="<?php the_sub_field('sponsor_image');?>" alt="Sponsor Image">
            </a>
          </div>
        <?php endwhile;?>
      </div>
    <?php endif;?>



    <?php // Breakout Sponsors ?>
    <?php if(have_rows('breakout_sponsors', 'option')):?>
    <div class="row">
      <div class="col-12 text-center">
        <h4 class="sponsors--headline">
          METHOD + MADNESS BREAKOUT TRACK SPONSOR
        </h4>
      </div>
    </div>

      <div class="row row--justify-content-center row--align-items-center">
        <?php while(have_rows('breakout_sponsors', 'option')): the_row();?>
          <div class="col-3 text-center sponsors--grid-item">
            <a href="<?php the_sub_field('sponsor_link');?>" target="_blank">
              <img src="<?php the_sub_field('sponsor_image');?>" alt="Sponsor Image">
            </a>
          </div>
        <?php endwhile;?>
      </div>
    <?php endif;?>


    <?php // Industry Sponsors ?>
    <?php if(have_rows('industry_sponsors', 'option')):?>
    <div class="row">
      <div class="col-12 text-center">
        <h4 class="sponsors--headline">
          AIGA AZ INDUSTRY SPONSOR
        </h4>
      </div>
    </div>

      <div class="row row--justify-content-center row--align-items-center">
        <?php while(have_rows('industry_sponsors', 'option')): the_row();?>
          <div class="col-3 text-center sponsors--grid-item">
            <a href="<?php the_sub_field('sponsor_link');?>" target="_blank">
              <img src="<?php the_sub_field('sponsor_image');?>" alt="Sponsor Image">
            </a>
          </div>
        <?php endwhile;?>
      </div>
    <?php endif;?>




    <?php // Agency Sponsors ?>
    <?php if(have_rows('partner_sponsors', 'option')):?>
    <div class="row">
      <div class="col-12 text-center">
        <h4 class="sponsors--headline">
          PHXDW AGENCY SPONSOR
        </h4>
      </div>
    </div>

      <div class="row row--justify-content-center row--align-items-center">
        <?php while(have_rows('partner_sponsors', 'option')): the_row();?>
          <div class="col-3 text-center sponsors--grid-item">
            <a href="<?php the_sub_field('sponsor_link');?>" target="_blank">
              <img src="<?php the_sub_field('sponsor_image');?>" alt="Sponsor Image">
            </a>
          </div>
        <?php endwhile;?>
      </div>
    <?php endif;?>



        <?php // Agency Sponsors ?>
    <?php if(have_rows('inkind_sponsors', 'option')):?>
    <div class="row">
      <div class="col-12 text-center">
        <h4 class="sponsors--headline">
          PHXDW IN-KIND SPONSOR
        </h4>
      </div>
    </div>

      <div class="row row--justify-content-center row--align-items-center">
        <?php while(have_rows('inkind_sponsors', 'option')): the_row();?>
          <div class="col-3 text-center sponsors--grid-item">
            <a href="<?php the_sub_field('sponsor_link');?>" target="_blank">
              <img src="<?php the_sub_field('sponsor_image');?>" alt="Sponsor Image">
            </a>
          </div>
        <?php endwhile;?>
      </div>
    <?php endif;?>






     <?php // Community  Sponsors ?>

    <?php if(have_rows('community_sponsors', 'option')):?>
    <div class="row">
      <div class="col-12 text-center">
        <h4 class="sponsors--headline">
           COMMUNITY PARTNERS
        </h4>
      </div>
    </div>

      <div class="row row--justify-content-center row--align-items-center">
        <?php while(have_rows('community_sponsors', 'option')): the_row();?>
          <div class="col-3 text-center sponsors--grid-item">
            <a href="<?php the_sub_field('sponsor_link');?>" target="_blank">
              <img src="<?php the_sub_field('sponsor_image');?>" alt="Sponsor Image">
            </a>
          </div>
        <?php endwhile;?>
      </div>
    <?php endif;?>






  </div>
</section>
