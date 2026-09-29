<!-- <a class="btn btn-primary btn-sm off-canvas" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"></a> -->
<!-- canvas data one=================== --> 
<div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Investor Pakages Data</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"><i class="fe fe-x fs-18"></i></button>
    </div>
    <div class="offcanvas-body">
      <div class="row">
        <div class="col-8">
          <div class="card">
            <div class="card-body p-2 " style="border: 1px solid #ffffff47;border-radius: 4px;" >
              <small>Email - </small>
              <h4 class="" id="email_box90">
              </h4>
              <small  id="name_box90">Name - </small>
              <h4 class="">
              </h4>
            </div>
          </div>
        </div>
        <div class="col-4">
          <div class="card">
            <div class="card-body p-2 h-100 w-100 d-flex" style="border: 1px solid #ffffff47;border-radius: 4px;">
                <img id="investor_profile" style="border: 1px solid white;border-radius: 7px;" src="" class="avatar avatar-xxl bradius cover-image" alt="">
            </div>
          </div>
        </div>
      </div>
       <div class="main_box" id = "pakages_stotrage">

      </div>
    </div>
 </div>

<!--/Scroll offcanvas support-->
<!-- //========================================== -->





<!--Right Offcanvas-->
<!-- <button class="btn btn-primary off-canvas" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom">Toggle bottom offcanvas</button> -->

<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">
        <h5 id="offcanvasRightLabel"></h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"><i class="fe fe-x fs-18"></i></button>
    </div>
    <div class="offcanvas-body">
        <h4>Email - <h4 id="email_box_msg"></h4></h4>
        <div class="card p-0">
          <div class="card-body p-1" style="border: 1px solid #ffffff47;border-radius: 4px;">
            <div class="card-title sp_title">
                Send Reply
            </div>
            <form class="profile-edit" method="post">
              <input type="hidden" id="email_store_9" name="email_store_9" value="">
              <textarea name="messages_box" class="form-control" placeholder="What's in your mind right now" rows="7"></textarea>
              <div class="profile-share border-top-0">
                <div class="mt-2">
                  <a href="javascript:void(0)" class="me-2" title="Image" data-bs-toggle="tooltip" data-bs-placement="top">
                      Send Message
                  </a>
                </div>
                <button name="send_message_investor_9" role="button" type="submit" class="btn btn-sm btn-success ms-auto"><i class="fa fa-share ms-1"></i>Send</button>
              </div>
            </form>
          </div>
        </div>
    </div>
</div>
<!--/Right Offcanvas-->
<!-- Canvas user info edit option -->
<!-- //========================================= -->
<!-- //========================================= -->
<div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="insEditInvestorOption" aria-labelledby="offcanvasScrollingLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Investor Pakages Data</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"><i class="fe fe-x fs-18"></i></button>
    </div>
    <div class="offcanvas-body">
      <div class="row">
        <div class="card">
          <div class="card-body p-1">
            <form class="profile-edit" method="post">
                <div class="row">
                  <div class="col-12">
                    <div class="form-group ">
                      <label for="exampleInputEmail1" class="form-label">Email address</label>
                      <input name="email" type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" >
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-group">
                      <label for="exampleInputEmail1" class="form-label">Fast Name</label>
                      <input name="FastName" type="text" class="form-control" id="exampleInputEmail1" placeholder="Fast Name" >
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-group">
                      <label for="lastName" class="form-label">Last Name</label>
                      <input name="LastName" type="text" class="form-control" id="lastName" placeholder="Last Name" >
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="address" class="form-label">Address</label>
                      <input name="LastName" type="text" class="form-control" id="address" placeholder="Address" >
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="useRafer" class="form-label">Use Rafer Id</label>
                      <input name="RaferId" type="text" class="form-control" id="useRafer" placeholder="rafer id" >
                    </div>
                  </div>
                  </div>
                  <div class="col-md-6">
                    <input class="btn btn-primary" type="submit" name="submit" value="submit">
                  </div>
                </div>
              </form>
              </div>
             </div>
            </div>
          </div>
        </div>
    </div>
 </div>
