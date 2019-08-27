<div class="main-content-container container-fluid px-4">
            <!-- Page Header -->
            <div class="page-header row no-gutters py-4">
              <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">Masteres/Academic Year</span>
                <h3 class="page-title">Academic Year</h3>
              </div>
            </div>
            <!-- End Page Header -->
            <!-- Default Light Table -->
            <div class="row">
            <!-- New Draft Component -->
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
            <!-- Quick Post -->
            <div class="card card-small h-100">
                <div class="card-header border-bottom">
                <h6 class="m-0">Academic Year</h6>
                </div>
                <div class="card-body d-flex flex-column">
                <?php echo form_open_multipart($add_year); ?>
                    <div class="form-group">
                    <input type="number" class="form-control" name="from_year"  placeholder="20XX"> 
                    </div>
                    To
                    <br>
                    <div class="form-group">
                    <input type="number" class="form-control" name="to_year"  placeholder="20XY"> 
                    </div>
                    <div class="form-group mb-0">
                    <button type="submit" class="btn btn-accent">Save</button>
                    </div>
                    
                </form>


                
                
                </div>
            </div>
            <!-- End Quick Post -->
            </div>
            <!-- End New Draft Component -->

              <div class="col">
                <div class="card card-small mb-4">
                  <div class="card-header border-bottom">
                    <h6 class="m-0">Active Users</h6>
                  </div>
                  <div class="card-body p-0 pb-3 text-center">
                    <table class="table mb-0">
                      <thead class="bg-light">
                        <tr>
                          <th scope="col" class="border-0">#</th>
                          <th scope="col" class="border-0">Academic Year</th>
                          <th scope="col" class="border-0">Action</th>
                          
                        </tr>
                      </thead>
                      <tbody>
                      <?php $i=1; foreach($academic_years_list as $year){ ?>
                        <tr>
                          <td><?php echo $i; ?></td>
                          <td><?php echo $year['year']; ?></td>
                          <td>
                          <?php echo form_open($delete_academic_year); ?>
                          <input type="hidden" name="id" value="<?php echo $year['id']; ?>">
                          <button type="submit" class="btn btn-danger">Delete</button>
                          </form>
                          </td>
                        </tr>
                       <?php $i=$i+1; } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Default Light Table -->
            
          </div>