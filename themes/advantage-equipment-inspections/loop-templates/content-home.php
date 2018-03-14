<?php
/**
 * Partial template for content in page.php
 *
 * @package understrap
 */

//  Custom Fields

//  Advanced Custom Fields
//  ---------------------------------------------------------------------------
//  Hero
$hero_image                   = get_field('hero_image');
$hero_title                   = get_field('hero_title');
$hero_description             = get_field('hero_description');
$hero_button_text             = get_field('hero_button_text');
//  Report Type List
$overlay_button_text          = get_field('overlay_button_text');
$large_button_text            = get_field('large_button_text');
$item_1_image                 = get_field('item_1_image');
$item_1_title                 = get_field('item_1_title');
$item_1_description           = get_field('item_1_description');
$item_2_image                 = get_field('item_2_image');
$item_2_title                 = get_field('item_2_title');
$item_2_description           = get_field('item_2_description');
$item_3_image                 = get_field('item_3_image');
$item_3_title                 = get_field('item_3_title');
$item_3_description           = get_field('item_3_description');
//  Process
// $process_title                = get_field('process_title');
$section_title                = get_field('section_title');
$process_1_subtitle           = get_field('process_1_subtitle');
$process_1_description        = get_field('process_1_description');
$process_1_button_text        = get_field('process_1_button_text');
$process_2_subtitle           = get_field('process_2_subtitle');
$process_2_description        = get_field('process_2_description');
$process_2_link_icon          = get_field('process_2_link_icon');
$process_2_link_text          = get_field('process_2_link_text');
$process_3_subtitle           = get_field('process_3_subtitle');
$process_3_description        = get_field('process_3_description');
$process_3_link_icon          = get_field('process_3_link_icon');
$process_3_link_text          = get_field('process_3_link_text');
//  Locations Area
$locations_image              = get_field('locations_image');
$locations_title              = get_field('locations_title');
$locations_description        = get_field('locations_description');
$locations_button_text        = get_field('locations_button_text');
//  Why Advantage
$why_advantage_title          = get_field('why_advantage_title');
$why_advantage_description    = get_field('why_advantage_description');
//  Footer Area
$contact_form                 = get_field('contact_form');
$contact_form_footer_title    = get_field('contact_form_footer_title');
$contact_form_footer_text     = get_field('contact_form_footer_text');
?>


<!-- Hero -->
<div class="hero"
  <?php if( !empty($hero_image) ) :  ?>
    style="background-image: url('<?php echo $hero_image; ?>');"
  <?php endif; ?>
>
  <div class="hero-contents">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <h1 class="hero-title"><?php echo $hero_title; ?></h1>
          <p class="hero-text lead"><?php echo $hero_description; ?></p>
          <a class="hero-link btn btn-secondary" href="product/inspection-report/"><?php echo $hero_button_text; ?></a>
          <div class="hero-link-primary mt-2"><a href="http://aei.dantilse.com/wp-content/uploads/2017/05/sample-inspection-report.pdf" target="_blank" style="color: #ffffff;">Download Sample Report</a></div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Hero -->

<!-- Reports List -->
<section class="section-top" id="reports_list">
  <div class="container">
    <div class="reports-list row">
      <div class="reports-item col-12 col-md-4">
        <figure class="reports-image">
          <img class="img-fluid" src="<?php echo $item_1_image; ?>" alt="Passenger Reports">
        </figure>
        <h4 class="reports-title"><?php echo $item_1_title; ?></h4>
        <p class="reports-description"><?php echo $item_1_description; ?></p>
        <p class="reports-price">$119</p>
      </div>
      <div class="reports-item col-12 col-md-4">
        <figure class="reports-image">
          <img class="img-fluid" src="<?php echo $item_2_image; ?>" alt="Commercial Reports">
        </figure>
        <h4 class="reports-title"><?php echo $item_2_title; ?></h4>
        <p class="reports-description"><?php echo $item_2_description; ?></p>
        <p class="reports-price">$189</p>
      </div>
      <div class="reports-item col-12 col-md-4">
        <figure class="reports-image">
          <img class="img-fluid" src="<?php echo $item_3_image; ?>" alt="Marine Reports">
        </figure>
        <h4 class="reports-title"><?php echo $item_3_title; ?></h4>
        <p class="reports-description"><?php echo $item_3_description; ?></p>
        <p class="reports-price">$89</p>
      </div>
      <div class="col-md-12">
        <h4 class="reports-link">
          <a href="product/inspection-report/"><?php echo $large_button_text; ?></a>
        </h4>
      </div>
    </div>
  </div>
</section>
<!-- End Reports List -->

<!-- How It Works -->
<section class="process" id="process">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2 class="section-title text-center"><?php echo $section_title; ?></h2>
      </div>
    </div>
    <ul class="process-list row list-unstyled">
      <!-- First Item -->
      <li class="process-item col-md-4">
        <div class="process-number"><span>1</span></div>
        <h5 class="process-title"><?php echo $process_1_subtitle; ?></h5>
        <div class="process-description"><?php echo $process_1_description; ?></div>
        <a class="process-link btn btn-primary" href="product/inspection-report/"><?php echo $process_1_button_text; ?></a>
      </li>
      <!-- Second Item -->
      <li class="process-item col-md-4">
        <div class="process-number"><span>2</span></div>
        <h5 class="process-title"><?php echo $process_2_subtitle; ?></h5>
        <div class="process-description"><?php echo $process_2_description; ?></div>
        <a class="process-link" href="#locations"><span class="fa <?php echo $process_2_link_icon; ?>"></span>&nbsp;<?php echo $process_2_link_text; ?></a>
      </li>
      <!-- Third Item -->
      <li class="process-item col-md-4">
        <div class="process-number"><span>3</span></div>
        <h5 class="process-title"><?php echo $process_3_subtitle; ?></h5>
        <div class="process-description"><?php echo $process_3_description; ?></div>
        <a class="process-link" href="http://aei.dantilse.com/wp-content/uploads/2017/05/sample-inspection-report.pdf" target="_blank">
          <span class="fa <?php echo $process_3_link_icon; ?>"></span>&nbsp;<?php echo $process_3_link_text; ?></a>
      </li>
    </ul>
  </div>
</section>
<!-- End How It Works -->

<!-- Locations -->
<section class="locations" id="locations">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6">
        <figure class="locations-image">
          <img class="img-fluid" src="<?php echo $locations_image; ?>" alt="Abstract">
        </figure>
      </div>
      <div class="col-md-6">
        <div class="locations-description">
          <h2 class="locations-title"><?php echo $locations_title; ?></h2>
          <div class="locations-text">
            <p><?php echo $locations_description; ?></p>
          </div>
          <a class="locations-link btn btn-primary" href="product/inspection-report/"><?php echo $locations_button_text; ?></a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Locations -->

<!-- Why Advantage -->
<section class="advantage" id="advantage">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2 class="advantage-title"><?php echo $why_advantage_title; ?></h2>
        <div class="advantage-text">
          <p><?php echo $why_advantage_description; ?></p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Why Advantage -->

<!-- Get Started Section -->
<section class="get-started" id="get_started">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <h2><?php echo $contact_form_footer_title; ?></h2>
        <p><?php echo $contact_form_footer_text; ?></p>
      </div>
      <div class="col-lg-8">
        <div class="get-started-form">
          <?php echo $contact_form; ?>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Get Started Section -->
