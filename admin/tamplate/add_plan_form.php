<form class="" enctype="multipart/form-data" method="post">
      <div class="card-body"> 
          <div class="row">
              <div class="col-sm-6 col-md-6">
                  <div class="form-group">
                      <label class="form-label">Plan Name <span class="text-red">*</span></label>
                      <input name="Plan_name" type="text" class="form-control" placeholder="Plan name">
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="form-group">
                      <label class="form-label">Plan Image (If Have) <span class="text-red">*</span></label>
                      <input name="plan_image" type="file" class="form-control">
                  </div>
              </div>
              <div class="col-sm-12 col-md-12">
                  <div class="form-group">
                      <label class="form-label">Plan Description <span class="text-red">*</span></label>
                       <textarea name="plan_desc"  class="form-control"  rows="4" cols="50">Plan Description..</textarea>
                  </div>
              </div>
              <div class="col-md-12">
                  <div class="form-group">
                      <input name="add_plan_new" type="submit" class="btn btn-primary" value="Create Plan">
                  </div>
              </div>
          </div>
      </div>
</form>
