<?php
include("header.php");
?>

<!--app-content open-->
<div class="main-content app-content mt-0">
  <div class="side-app">
    <!-- CONTAINER -->
    <div class="main-container container-fluid">
      <!-- PAGE-HEADER -->
      <div class="page-header">
        <h1 class="page-title">Customer Panel</h1>
        <div>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Customer</a></li>
            <li class="breadcrumb-item active" aria-current="page">Panel</li>
          </ol>
        </div>
      </div>
      <?php
        include("tamplate/customer_customization_payment.php");
        include("tamplate/tutorial.php");
        include("tamplate/Investor_Badgee_lavels.php");
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
