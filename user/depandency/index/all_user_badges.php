<!-- connection -->
<div class="row mb-3">
    <div class="col">
        <h6 class="title">Our Lavel Badge</h6>
    </div>
</div>
<div class="row mb-3">
    <div class="col-12 px-0">
        <!-- swiper users connections -->
        <div class="swiper-container connectionwiper">
            <div class="swiper-wrapper">
              <?php
              $i = 0;
              foreach ($Badge_all as $data) {
                $badge_id = $data['id'];
                $badge_name = $data["name"];
                $minimum_invest = $data["minimum_invest"];
                // $minimum_withdrow = $data["minimum_withdrow"];
                $badge_arr = $badge_all[$i];
                ?>
                <div class="swiper-slide">
                    <a data-bs-target="#model_<?php echo $i ?>" data-bs-toggle="modal"  class="card text-center">
                        <div class="card-body">
                            <figure class="avatar avatar-50 shadow-sm mb-1 rounded-10">
                                <img class="img_badges" src="../<?php echo $badge_arr ?>" alt="">
                            </figure>
                            <p class="text-color-theme size-12 small"><?php echo $badge_name ?></p>
                        </div>
                    </a>
                </div> 
            <?php
            $i++;
           }
           ?>
        </div>
    </div>
    <!-- model data box -->
    <!-- Model Box=========space============ -->
<!-- account active Modal -->
<?php
$ii = 0;
foreach ($Badge_all as $data) {
  $badge_id = $data['id'];
  $badge_name = $data["name"];
  $minimum_invest = $data["minimum_invest"];
  // $minimum_withdrow = $data["minimum_withdrow"];
  $badge_arr = $badge_all[$ii];
  ?>
      <div class="modal fade" id="model_<?php echo $ii ?>"  aria-labelledby="cammodalLabel" aria-hidden="true">
          <div class="modal-dialog modal-sm modal-dialog-centered">
              <div class="modal-content">
                  <div class="modal-header">
                    <h6 class="modal-title text-center" id="cammodalLabel"><?php echo $badge_name ?></h6>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="model-body">
                  <img class="w-75 image-fluid m-auto text-center d-flex" src="../<?php echo $badge_arr ?>" alt="">
                  <h2 style="font-size:16px" class=" mb-1 p-3 text-center">
                    <span style="font-size:40px; padding:8px"><?php echo $minimum_invest ?> Usd</span><br>
                    <span> Maximum Invest Ammount</span>
                  </h2>
                </div>
        </div>
    </div>
  <!-- profile edit -->
<!-- Model Box=========space============ -->
</div>
    <!-- model data box -->
  <?php
 $ii++;
 } ?>
</div>
