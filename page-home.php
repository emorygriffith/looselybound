<?php
/*
 Template Name: Home Page Template
 */
?>

<?php get_header(); ?>



<div class="home-background row">
  <div class="contain">
      <!-- Left side of home page  -->
      <div class="home-left col-lg-7 col-md-7">
        <div class="banner">
          <h1>A Hollistic Approach to Wealth, Branding, and Family Office Services</h1>
          <h3>Our winning methodology consistently yields exceptional results</h3>
          <a href="/approach"><p>Read more about our approach ></p></a>
        </div>
      </div>


      <!-- Right side of home page  -->
      <div class="home-right col-lg-5 col-md-5">

        <ul class="media-list">


            <li class="media wp">
              <a href="/services#wealth-planning">
                <div class="media-left">
                  <!-- <a href=""> -->
                    <img class="media-object wp-icon" src="<?php echo get_template_directory_uri(); ?>/library/images/Wealth_Planning_Icon_filled.png" alt="...">
                  <!-- </a> -->
                </div>
                <div class="media-body">
                  <h4 class="media-heading">Wealth Planning</h4>
                  We construct a dedicated team of individuals <br>uniquely positioned to grow your wealth.
                </div>
              </a>
            </li>


          <li class="media bm">
            <div class="media-left">
              <a href="">
                <img class="media-object bm-icon" src="<?php echo get_template_directory_uri(); ?>/library/images/Business_Management_Icon_Outlines_White_FINAL.svg" alt="...">
              </a>
            </div>
            <div class="media-body">
              <h4 class="media-heading">Business Management</h4>
              A vertical and cross-connected approach to growing your business.
            </div>
          </li>

          <li class="media rp">
            <div class="media-left">
              <a href="#">
                <img class="media-object rp-icon" src="<?php echo get_template_directory_uri(); ?>/library/images/Recording_Publishing_Icon.png" alt="...">
              </a>
            </div>
            <div class="media-body">
              <h4 class="media-heading">Recording and Publishing</h4>
              Our experience in the music industry <br>is unmatched.
            </div>
          </li>

          <li class="media ts">
            <div class="media-left">
              <a href="#">
                <img class="media-object ts-icon" src="<?php echo get_template_directory_uri(); ?>/library/images/Touring_Icon.png" alt="...">
              </a>
            </div>
            <div class="media-body">
              <h4 class="media-heading">Touring Services</h4>
              Comprehensive coverage for the road
            </div>
          </li>

          <li class="media ias">
            <div class="media-left">
              <a href="#">
                <img class="media-object ias-icon" src="<?php echo get_template_directory_uri(); ?>/library/images/Investment_Advisory_Services_Icon.png" alt="...">
              </a>
            </div>
            <div class="media-body">
              <h4 class="media-heading">Investment Advisory Services</h4>
              A comprehensive strategy to a lifestyle of <br>intlligent investments
            </div>
          </li>

          <li class="media fam">
            <div class="media-left">
              <a href="#">
                <img class="media-object fam-icon" src="<?php echo get_template_directory_uri(); ?>/library/images/Family_Icon.png" alt="...">
              </a>
            </div>
            <div class="media-body">
              <h4 class="media-heading">Family</h4>
              Family Communication, Governance, and Education
            </div>
          </li>

          <li class="media tp">
            <div class="media-left">
              <a href="#">
                <img class="media-object tp-icon" src="<?php echo get_template_directory_uri(); ?>/library/images/Tax_Icon.png" alt="...">
              </a>
            </div>
            <div class="media-body">
              <h4 class="media-heading">Tax and Planning</h4>
              We combine dilligence with innovative tax strategies to maximize your wealth
            </div>
          </li>

        </ul>

      </div>

  </div>
</div>


<div class="home-family row contain">
  <h3>At Monarch, we're all about family.</h3>

  <div class="col-lg-6 col-md-6">
    Monarch was formed as the result of handling one of America's wealthiest families and functioned as their private family office over 35 years ago.
    Today. we are a multi-family office that provides services to more than 75 families worldwide.
  </div>

  <div class="col-lg-6 col-md-6">
    Our diverse team of experienced professionals are always up to the challenge of helping our clients achieve their financial goals. From scheduling monthly bills to
    managing large-scale financial decisions, Monarch is dedicated to providing the highest quality of service to each of our clients.
  </div>

  <a href="/about"><h4>Learn more about Monarch > </h4></a>

</div>

<?php get_footer(); ?>
