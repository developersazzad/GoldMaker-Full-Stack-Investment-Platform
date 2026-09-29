<!-- rafer link sections -->
<div class="row mb-4">
<div class="col-12">
    <div class="card theme-bg text-center">
        <div class="card-body">
            <div class="row">
              <div class="col-6 align-self-center ps-0">
                  <img class="rafer_banner" src="./assets/icons/High/rafer_bonus.png" alt="" class="mw-100">
              </div>
                <div class="col align-self-center">
                    <h4>Rafer Code</h4>
                    <p class="size-16 text-light">
                        <?php echo $My_RaferId ?>
                    </p>
                    <p id="copy_rafer" style="display:none"><?php echo "Rafer Id : $My_RaferId" ?></p>
                    <a href="jsvascript:void(0)" onclick="copy_data('copy_rafer','copy_stats_99')" class="btn-sm btn btn-success btn_pakages">
                        Copy
                    </a>
                    <br><small id="copy_stats_99" class="text-muted"></small> 
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- rafer links -->
