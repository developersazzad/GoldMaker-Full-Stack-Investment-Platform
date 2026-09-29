<?php
include("header.php");
include("../function/Admin_countableData.php");
// function only Home Page Data===
$ALL_INV = ALL_INS();
$ACTIVE_INV = AC_IN();
$VERIF_INS = Vi_IN();
$SUSPAND_INS = SUSP_IN();
$TOTAL_PKG = T_PKG();//array
$TOTAL_PLAN = T_PLANS();
$TOTAL_SHARE_PROFIT = T_S_P();
$TOTAL_WITHDROW_REQ = T_W_R(); //array
$INS_PENDING_VERIFI = Ins_p_V();
$TODAY_SHARE_PROFIT = Today_S_P();
$LAST7DAY_S_PROFIT = Last7d_S_P();
$LAST30DAY_S_PROFIT = Last30d_S_P();
$OPEN_SUPPORT_TICKT = Open_S_T();//array
$INS_LIVE = InsLive();
$ADMIN_F = Admin_Fanction();

?>
<!--app-content open-->
<div class="main-content app-content mt-0">
  <div class="side-app">
    <!-- CONTAINER -->
    <div class="main-container container-fluid">
      <!-- PAGE-HEADER -->
      <div class="page-header">
        <h1 class="page-title">Main Dashboard</h1>
        <div>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Dashboard 01</li>
          </ol>
        </div>
      </div>
      <!-- PAGE-HEADER END -->
      <?php
         include("tamplate/all_admin_action.php");
         include("tamplate/important_setting.php");
         include("tamplate/banner_edit_option.php");
         include("tamplate/info_box.php");
       ?>
      <!-- All user info start -->
      <?php
       // include("tamplate/sels_chart.php");
      ?>
      <!-- basic table on user counter -->
       <?php
        include("tamplate/user_LivePkgcounter_table.php");
        ?>

      <!-- basic table on user counter -->
    </div>
    <!-- CONTAINER END -->
  </div>
</div>
<!--app-content close-->
<?php
include("footer.php");
 ?>
