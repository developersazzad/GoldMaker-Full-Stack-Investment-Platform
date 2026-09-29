<!-- list of transiticetion -->
<div class="row mb-4">
  <div class="col-12 px-0">
    <ul class="list-group list-group-flush bg-none">
      <?php
         foreach ($withdrow_history as $data) {
           $icon = $data['icon'];
           $method_name = $data["method_name"];
           $Ammount = $data["Ammount"];
           $why_cancle = $data['why_cancle'];
           $status = $data['Status'];
           $Date = $data["Date"];
           $Date = date('Y-m-d', strtotime($Date));
          ?>
          <li class="list-group-item">
            <div class="row">
              <div class="col-auto">
                <div style="background: white;display: flex;justify-content: center;align-items: center;" class="avatar avatar-50 shadow rounded-10 ">
                  <img src="../assets/images/brands/<?php echo $icon ?>" alt="">
                </div>
              </div>
              <div class="col align-self-center ps-0">
                <p class="text-color-theme mb-0"><?php echo $method_name ?></p>
                <p class="text-muted size-12">Status -
                 <?php
                   echo $status." ";
                   if($status=="cancle"){
                     echo $why_cancle;
                   }elseif($status=="success"){
                     echo "Complete Payment";
                   }
                  ?>
               </p>
              </div>
              <div class="col align-self-center text-end">
                <p class="mb-0"><?php echo $Ammount ?> USD</p>
                <p class="text-muted size-12"><?php echo $Date ?></p>
              </div>
            </div>
          </li>
          <?php
         }
       ?>
    </ul>
  </div>
</div>
