<?php
  $data_pages = "index";
  include("main_header.php");
  if(isset($_GET["tu_id"])){
    $tutorial_id = $_GET["tu_id"];
    $sql = mysqli_query($con,"SELECT `id`, `title`, `text`, `video`, `link`, `image`, `date` FROM `tutorial_section` WHERE id='$tutorial_id'");
    $fetch = mysqli_fetch_assoc($sql);
    $title = $fetch["title"];
    $text = $fetch["text"];
    $video = $fetch["video"];
    $link = $fetch["link"];
    $image = $fetch["image"];
    if($image==""){
      $image =  "";
    }else{
      $image = "<img class='w-100' src='../assets/images/tutorial_images/".$image."' alt=''>";
    }
    $date = $fetch["date"];
  }else{
    header("location:tutorial");
  }
 ?>
 <!-- main page content -->
 <div class="main-container container">
               <!-- Blog/News Details banner -->
               <div class="row">
                   <div class="col-12 px-0">
                       <div class="card mb-4 overflow-hidden shadow-sm theme-bg text-white rounded-0">
                           <div class="overlay"></div>
                           <div class="coverimg h-100 w-100 position-absolute opacity-5">
                               <img src='../assets/images/collection/tutorial.png' alt=''>
                           </div>
                           <div class="card-body">
                               <div class="row mb-5">
                                   <div class="col">
                                       <span class="tag">Trending</span>
                                   </div>
                                   <div class="col-auto">
                                       <button class="btn btn-danger text-white btn-44 rounded-circle shadow-sm">
                                           <i class="bi bi-share"></i>
                                       </button>
                                       <button class="btn btn-success text-white btn-44 rounded-circle shadow-sm">
                                           <i class="bi bi-bookmark"></i>
                                       </button>
                                   </div>
                               </div>
                               <br>
                               <p class="text-muted">Published on: <?php echo $date ?></p>
                               <div class="small">
                                   <figure class="avatar avatar-50 rounded mx-1">
                                       <img src="../assets/images/logo/Goldmaker-circle-cool-sm.png" alt="">
                                   </figure>
                                   Admin Goldmaker
                               </div>
                           </div>
                       </div>
                   </div>
               </div>

               <!-- Blogs/News Content  -->
               <div class="row">
                   <div class="col-12 col-md-10 col-lg-8 mx-auto">
                       <figure class="overflow-hidden rounded-15 text-center">
                           <?php echo $image ?>
                       </figure>

                       <h5 class="mb-3"><?php echo $title ?></h5>
                       <p class="text-muted"><?php echo $text ?></p>
                       <?php
                          if($link!=""){
                            ?>
                               <center><a class="btn-lg mt-2 btn btn-primary text-center mb-5" href="<?php echo $link ?>">Click Hare</a></center>
                            <?php
                          }
                        ?>

                       <div class="row">
                           <div class="card">
                             <div class="card-body">

                                   <iframe width="100%" height="315"
                                   src="https://www.youtube.com/embed/k1PTW63L1VY">
                                   </iframe>

                             </div>
                           </div>
                       </div>
                   </div>
               </div>

               <!-- blog comments -->
               <!-- <div class="row mb-3">
                   <div class="col">
                       <h6 class="title">Comments</h6>
                   </div>
               </div>
               <div class="row mb-3">
                   <div class="col">
                       <div class="form-group form-floating  mb-3">
                           <textarea class="form-control" placeholder="Name" id="comments"></textarea>
                           <label for="comments">Your Comment</label>
                       </div>
                       <button class="btn btn-default btn-lg shadow-sm w-100">Post Comment</button>
                   </div>
               </div>
               <div class="row mb-4">
                   <div class="col-12">
                       <div class="row py-3">
                           <div class="col-auto position-relative">
                               <figure class="avatar avatar-50 rounded-15">
                                   <img src="assets/img/user1.jpg" alt="">
                               </figure>
                           </div>
                           <div class="col ps-0">
                               <a href="profile.html" class="mb-1 text-normal d-block">Ajinkya McMohan <i class="bi bi-arrow-right-short text-primary"></i></a>
                               <p class="small mb-3 text-muted ">
                                   Purchased
                                   <span class="float-end">
                                       <span class="small">
                                           Rating: 4
                                       </span>
                                       &nbsp;
                                       <i class="bi bi-star-fill text-warning"></i>
                                       <i class="bi bi-star-fill text-warning"></i>
                                       <i class="bi bi-star-fill text-warning"></i>
                                       <i class="bi bi-star-fill text-warning"></i>
                                       <i class="bi bi-star text-warning"></i>
                                   </span>
                               </p>
                               <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                   Pellentesque
                                   sollicitudin dignissim nisi, eget malesuada ligula ultricies sit amet.
                                   Suspendisse
                                   efficitur ex eu est placerat mattis.</p>
                           </div>
                       </div>
                   </div>
               </div>
               <div class="clearfix"></div>
             </div> -->
 <?php
    include("mobile_menu.php");
    include("footer.php");
  ?>
