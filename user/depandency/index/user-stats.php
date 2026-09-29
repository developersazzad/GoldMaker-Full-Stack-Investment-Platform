<!-- tabs structure -->
<ul class="nav nav-pills nav-justified tabs mb-3" id="assetstabs" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#cards" type="button" role="tab" aria-controls="cards" aria-selected="true">today</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="currency-tab" data-bs-toggle="tab" data-bs-target="#currency" type="button" role="tab" aria-controls="currency" aria-selected="false">7days</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="currency-tab" data-bs-toggle="tab" data-bs-target="#tab3" type="button" role="tab" aria-controls="tab3" aria-selected="false">Month</button>
  </li>
</ul>
<div class="tab-content" id="assetstabsContent">
  <div class="tab-pane fade show active" id="cards" role="tabpanel">
    <!-- set today data================================================= -->
        <?php
          include("live_earnings/today.php");
         ?>
    <!-- set today data================================================= -->
  </div>
  <div class="tab-pane fade" id="currency" role="tabpanel" >
    <!-- last 7 days earning -->
     <?php
        include("live_earnings/7day.php");
      ?>
    <!-- last 7 days earning -->
  </div>
  <div class="tab-pane fade" id="tab3" role="tabpanel" >
    <!-- last 30 days earning -->
     <?php
        include("live_earnings/1month.php");
      ?>
    <!-- last 30 days earning -->
  </div>
</div>
