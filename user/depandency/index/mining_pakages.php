<!-- offers banner -->
<div class="row mb-4">
    <div class="col-12">
        <div class="card  bg_loading text-center"> 
            <div class="card-body">
                <div class="row justify-content-spacebetween">
                    <div class="col-md-5 col-7 align-self-center">
                      <div class="swiper-container timerSwiper_pakages">
                          <div class="swiper-wrapper">
                        <?php
                        $ii=0;
                        foreach ($my_plan_pakage as $data) {
                          $insMId = $data['insMId'];
                          $pakage_name = $data["pakage_name"];
                          $PerDayBonus = $data["PerDayBonus"];
                          $PlanName = $data["PlanName"];
                          $Duration = $data["Duration"];
                          $Duration = duration_calculate($Duration);
                          $pSDate = $data["pakageStartDate"];
                          // time calculation by pakage
                          $PSCDate = pakageEndDate($pSDate,$Duration);
                          $PKEnddate = $PSCDate['Enddate'];
                          $Year = $PSCDate['Year'];
                          // Mar 13, 2023 23:59:59
                          // time calculation by pakage
                          $CEdate = $PSCDate['CEdate'];
                          $presentDate = date("Y-M-d");
                          // calculate pakage validation
                          $expire = strtotime($CEdate);
                          $pressent = strtotime($presentDate);
                          $valid = "";
                          if($expire>=$pressent){
                            $valid = 'yes';
                            ?>
                            <!-- swiper slide one -->
                              <div class="swiper-slide">
                                <!-- Timer Html=========================== -->
                               <h4 class="timer_text">Pakage - <?php echo $pakage_name ?></h4>
                               <div class="timer-box" id="timerpkg_<?php echo $ii ?>">
                                 <div class="timer">
                                   <span class="days"></span>
                                   <p class="textV">Day</p>
                                 </div>
                                 <div class="timer">
                                   <span class="hours"></span>
                                   <p class="textV">Hour</p>
                                 </div>
                                 <div class="timer">
                                   <span class="minutes"></span>
                                   <p class="textV">Min</p>
                                 </div>
                                 <div class="timer secend_timer">
                                   <span class="seconds "></span>
                                   <p class="textV">Sec</p>
                                 </div>
                               </div>
                                <!-- Timer Html=========================== -->
                                <div class="tag_text_timer tag border-dashed border-opac">
                                    Year - <?php echo $Year ?> Mining Bonus
                                </div>
                                <!-- js code -->
                                <script type="text/javascript">
                                // The End Of The Year Date To Countdown To
                                // 1000 milliseconds = 1 Second
                                 let countDownDate_<?php echo $ii ?> = new Date("<?php echo $PKEnddate ?>").getTime();
                                 // console.log(countDownDate);
                                 let counter_<?php echo $ii ?> = setInterval(() => {
                                // Get Date Now
                                 let dateNow_<?php echo $ii ?> = new Date().getTime();
                                 // Find The Date Difference Between Now And Countdown Date
                                  let dateDiff = countDownDate_<?php echo $ii ?> - dateNow_<?php echo $ii ?>;
                                  // Get Time Units
                                  // let days = Math.floor(dateDiff / 1000 / 60 / 60 / 24);
                                   let days = Math.floor(dateDiff / (1000 * 60 * 60 * 24));
                                   let hours = Math.floor((dateDiff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                                  let minutes = Math.floor((dateDiff % (1000 * 60 * 60)) / (1000 * 60));
                                  let seconds = Math.floor((dateDiff % (1000 * 60)) / 1000);
                                  document.querySelector("#timerpkg_<?php echo $ii; ?> .days").innerHTML = days < 10 ? `0${days}` : days;
                                  document.querySelector("#timerpkg_<?php echo $ii; ?> .hours").innerHTML = hours < 10 ? `0${hours}` : hours;
                                  document.querySelector("#timerpkg_<?php echo $ii; ?> .minutes").innerHTML = minutes < 10 ? `0${minutes}` : minutes;
                                  document.querySelector("#timerpkg_<?php echo $ii; ?> .seconds").innerHTML = seconds < 10 ? `0${seconds}` : seconds;

                                  if (dateDiff < 0) {
                                    clearInterval(counter_<?php echo $ii ?>);
                                    }
                                  }, 1000);
                                </script>

                                <!-- js code -->
                              </div>
                            <?php

                          }else{
                            // no data when no live
                          }
                            ?>

                          <?php
                          $ii++;
                        }
                        ?>
                      </div>
                      </div>
                    </div>
                    <div class="col-md-3 col-5 align-self-center ps-0">
                        <div class="img_box_mining w-100">
                          <img  src="assets/img/component/sub-gear1.png" alt="" class="image_main_gear ">
                          <img  src="assets/img/component/min-gear.png" alt="" class="sub_gear1">
                          <img  src="assets/img/component/sub-gear2.png" alt="" class="sub_gear2">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- mining card -->
