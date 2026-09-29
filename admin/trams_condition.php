<?php include("header.php") ?>

            <!--app-content open-->
            <div class="main-content app-content mt-0">
                <div class="side-app">
                    <!-- CONTAINER -->
                    <div class="main-container container-fluid">
                        <!-- PAGE-HEADER -->
                        <div class="page-header">
                            <h1 class="page-title">Terms</h1>
                            <div>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0)">Pages</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Terms</li>
                                </ol>
                            </div>
                        </div>
                        <!-- PAGE-HEADER END -->

                        <!-- ROW-1 OPEN -->

                        <div class="row ">
                          <?php
                          $ii = 1;
                           foreach ($trams_all as $data) {
                             $Title = $data["Title"];
                             $id = $data["id"];
                             $Description = $data["Description"];
                             $Date = $data["Date"];
                             ?>
                             <!-- start -->
                               <div class="col-md-12">
                                   <div class="card">
                                     <form class="form" method="post">
                                       <div class="card-body">
                                         <input type="hidden" name="id_s" value="<?php echo $id ?>">
                                           <input name="title" type="text" class="mb-4 form-control-md form-control" value="<?php echo  $Title ?>">
                                             <textarea  name="main_text" class="mb-4 form-control lead" rows="7" cols="70"  ><?php echo $Description ?></textarea>
                                             <input type="submit" name="submity" value="Save All" class="btn btn-orange text-white">
                                       </div>
                                   </div>
                                   </form>
                               </div>
                               <!-- end -->
                             <?php
                           }
                           ?>
                        </div>
                        <!-- ROW-1 CLOSE -->
                    </div>
                    <!-- CONTAINER CLOSE -->
                </div>
            </div>
            <!--app-content closed-->
<?php include("footer.php") ?>
