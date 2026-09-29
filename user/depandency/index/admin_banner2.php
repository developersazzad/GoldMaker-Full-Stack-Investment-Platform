
<!-- offers banner -->
<div class="row mb-4">
    <div class="col-12">
        <div class="card theme-bg text-center">
            <div class="card-body">
                <div class="row">
                    <div class="col align-self-center">
                        <h3><?php echo $banner_title ?></h3>
                        <p class="size-12 text-muted">
                          <?php echo $banner_desc ?>
                        </p>
                        <?php
                          if($button_link!=""){
                            ?>
                            <a target="_blank" class="btn btn-primary btn-sm" href="<?php echo $button_link ?>">Click</a>
                            <?php
                          }
                         ?>
                    </div>
                    <div class="col-6 align-self-center ps-0">
                        <img src="../assets/images/admin_banner/<?php echo $banner_image ?>" alt="" class="mw-100">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
