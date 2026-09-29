<!-- welcome user -->
<div class="row mb-4">
    <div class="col-auto">
        <div class="avatar avatar-50 shadow rounded-10">
            <img src="../assets/images/InvestorProfilePic/<?php echo !empty($ProfilePic) ? $ProfilePic : 'userexample.png'; ?>" alt="">
        </div>
    </div>
    <div class="col align-self-center ps-0">
        <h4 class="text-color-theme"><span class="fw-normal"><?php echo $FastName ?> </span> <?php echo $LastName ?></h4>
        <p class="text-muted">
          Account Status - <?php if($Status=="Active"){
            echo $Status." But Not Complete";
          }elseif($Status=="Completed"){
            echo $Status;
          }elseif($Status=="Inactive"){
            echo $Status;
          }elseif($Status=="Suspend"){
            echo $Status;
          }elseif($Status=="Unseen"){
            echo $Status." Admin Check And Change Status.";
          }
          ?>
        </p>
    </div>
    <div class="col-auto">
        <div class="avatar avatar-50 shadow rounded-10">
          <?php
          $lavel = Badge_set();
          if($lavel=="Master"){
          ?>
          <img class="img_badges_main" src="../user/assets/img/badges/Master_Invastor.png" alt="">
          <?php
          }elseif($lavel=="Pro"){
            ?>

            <img class="img_badges_main" src="../user/assets/img/badges/Pro.png" alt="">
            <?php
          }elseif($lavel=="platinum"){
            ?>
            <img class="img_badges_main" src="../user/assets/img/badges/platinum.png" alt="">
            <?php
          }elseif($lavel=="Diamond"){
            ?>
            <img class="img_badges_main" src="../user/assets/img/badges/diamond.png" alt="">
            <?php
          }elseif($lavel=="Gold"){
            ?>
            <img class="img_badges_main" src="../user/assets/img/badges/gold.png" alt="">
            <?php
          }elseif($lavel=="Silvar"){
            ?>
            <img class="img_badges_main" src="../user/assets/img/badges/silvar.png" alt="">
            <?php
          }elseif($lavel=="Bronges"){
            ?>
            <img class="img_badges_main" src="../user/assets/img/badges/Bronges.png" alt="">
            <?php
          }elseif($lavel=="NewBee"){
            ?>
            <img class="img_badges_main" src="../user/assets/img/badges/New.png" alt="">
            <?php
          } ?>
        </div>
    </div>
</div>
