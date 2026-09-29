
<?php
 $about = about_data() ?? [];
 $SmallText = $about["SmallText"] ?? "";
 $MainText = $about["MainText"] ?? "";
 $InfoDescription = $about["InfoDescription"] ?? "";
 $AdminImage = $about["AdminImage"] ?? "";
 ?>
<!-- ================> About section start here <================== -->
<section class="about padding-top padding-bottom" id="about">
  <div class="container">
    <div class="about__wrapper">
      <div class="row g-5">
        <div class="col-lg-5">
          <div class="about__thumb" data-aos="fade-up" data-aos-duration="1500">
            <img src="assets/images/about/<?php echo $AdminImage ?>" alt="About Image">
          </div>
        </div>
        <div class="col-lg-6">
          <div class="about__content" data-aos="fade-up" data-aos-duration="2000">
            <p class="subtitle"><?php echo $SmallText ?></p>
            <h2><?php echo $MainText ?></h2>
            <p class=""><?php echo $InfoDescription ?></p>
            <!-- <ul class="ol about_ul">
              <li><i class="fa fa-circle" style="margin-right:5px"></i>The Growth Fund: A long-term investment option with a focus on equity growth. Ideal for those looking to build wealth over time.</li>
              <li><i class="fa fa-circle" style="margin-right:5px"></i> The Income Fund: An investment option designed to provide a steady stream of income through dividends and interest payments.</li>
              <li><i class="fa fa-circle" style="margin-right:5px"></i> The Balanced Fund: A mix of growth and income investments, offering the best of both worlds for those looking for stability and growth.</li>
              <li><i class="fa fa-circle" style="margin-right:5px"></i> The Conservative Fund: A low-risk investment option for those who prioritize capital preservation over high returns.</li>
            </ul> -->
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ================> About section end here <================== -->
