<div class="main-content-container container-fluid px-4">
            <!-- Page Header -->
            <div class="page-header row no-gutters py-4">
              <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
<span class="text-uppercase page-subtitle">Students/<a href="<?php echo base_url('index.php/webinar') ?>" >Workshop Conducted Under IIT Remote Center</a><?php if(isset($edit_data)) { ?>/edit <?php } ?></span>
<h3 class="page-title"><?php if(isset($edit_data_info)) { ?>Edit Data for <?php echo $edit_data_info['workshop'] ?> <?php } else{ ?> Workshop Conducted Under IIT Remote Center <?php } ?></h3>
              </div>
            </div>
            <!-- End Page Header -->
            <!-- Default Light Table -->
            <div class="row">
            <!-- New Draft Component -->
            <div class="col-lg-12 col-md-12 col-sm-12 mb-4">
            <!-- Quick Post -->
            <div class="card card-small h-100">
                <div class="card-header border-bottom">
                <h6 class="m-0">Workshop Conducted Under IIT Remote Center</h6>
                </div>
               <?php $add_permissions=explode(',',$permission['add_p']);
                if(in_array($this->tank_auth->get_user_id(),$add_permissions))?><?php{
                ?>
                <div class="card-body d-flex flex-column form-row">
                <?php if(!isset($edit_data_info)){echo form_open_multipart($add_data); } else { echo form_open_multipart($edit_form);}?>     
                    <div class="form-row">
                  
                        <div class="col-12 col-sm-6">
                        <label for="date">Date From and To</label>
                        <div id="blog-overview-date-range" class="input-daterange input-group input-group-sm my-auto ml-auto mr-auto ml-sm-auto mr-sm-0" style="max-width: 550px;">
                          <input type="text" class="input-sm form-control" name="start_date" <?php if (isset($edit_data_info)){?> value="<?php echo $edit_data_info['start_date']; ?>"<?php } ?>  placeholder="Start Date" id="blog-overview-date-range-1" required="required">
                          <input type="text" class="input-sm form-control" name="end_date" <?php if (isset($edit_data_info)){?> value="<?php echo $edit_data_info['end_date']; ?>"<?php } ?> placeholder="End Date" id="blog-overview-date-range-2" required="required">
                          <span class="input-group-append">
                            <span class="input-group-text">
                              <i class="material-icons"></i>
                            </span>
                          </span>
                        </div>
                      </div>
                      <div class="form-group col-md-4">
                        <label for="Title">Name of workshop</label>
                         <input type="text" name="workshop" class="form-control" <?php if(isset($edit_data_info)){?> value="<?php echo $edit_data_info['workshop'] ?>" <?php } ?>  placeholder="Name of Workshop" required="required">
                      </div>
                      <div class="form-group col-md-4">
                        <label for="Participants">No. of Participants</label>
                        <input type="text" name="participants" <?php if(isset($edit_data_info)){?> value="<?php echo $edit_data_info['participants'] ?>" <?php } ?> class="form-control" placeholder="No of Participants" required="required">
                      </div>
                      <div class="form-group col-md-4">
                        <label for="Fund">Total Fund Received</label>
                        <input type="text" name="fund" <?php if(isset($edit_data_info)){?> value="<?php echo $edit_data_info['fund'] ?>" <?php } ?> class="form-control" placeholder="fund" required="required">
                      </div>
                      <div class="form-group col-md-4">
                        <label for="duration">Duration of Workshop</label>
                        <input type="text" name="duration" <?php if(isset($edit_data_info)){?> value="<?php echo $edit_data_info['duration'] ?>" <?php } ?> class="form-control" placeholder="Duration of workshop" required="required">
                      </div>  
                      <div class="form-group col-md-4">
                        <label for="Coordinator">Name of Coordinator</label>
                        <input type="text" name="coordinator" <?php if(isset($edit_data_info)){?> value="<?php echo $edit_data_info['duration'] ?>" <?php } ?> class="form-control" placeholder="Duration of workshop" required="required">
                      </div>
                   
                      <div class="form-group col-md-2">
                        <label for="Status">Status</label>
                        <select name="status" class="form-control">
                        <?php foreach($status_list as $st){?>
                        <option value="<?php echo $st['id']; ?>" <?php if(isset($edit_data_info) && $edit_data_info['status']== $st['id']) { ?> selected="selected" <?php } ?> ><?php echo $st['status']; ?></option>
                        <?php } ?>
                        </select>
                        
                      </div>
                      <div class="form-group col-md-4">
                        <label for="Document">Upload Document</label>
                        <input type="file" name="files" <?php if(isset($edit_data_info)){?> value="<?php echo $edit_data_info['file'] ?>" <?php } ?> class="form-control">
                      </div>
                      <div class="form-group col-md-4">
                        <label for="Note">Note / Remark</label>
                        <textarea name="remark"  class="form-control" required="required">
                        <?php if(isset($edit_data_info)){?> <?php echo $edit_data_info['note'] ?> <?php } ?>
                        </textarea>
                      </div>
                    </div>
                    <input type="hidden" name="added_by" value="<?php echo $this->tank_auth->get_user_id(); ?>">
                    <?php if(isset($edit_data_info)) { ?>


                    <input type="hidden" name="id" value="<?php echo $edit_data_info['id'] ?>">


                    <?php } ?>
                    <div class="form-group mb-0">
                       
                    <button type="submit" class="btn btn-accent">Save</button>
                    </div>
                </form>

                
                </div>
                    
                <?php //} ?>

            </div>
            <!-- End Quick Post -->
            </div>
            <!-- End New Draft Component -->

              <div class="col">
                <div class="card card-small mb-4">
                  <div class="card-header border-bottom">
                    <h6 class="m-0">Users</h6>
                  </div>
                  <div class="card-body p-0 pb-3 text-center">
                    <table class="table mb-0">
                      <thead class="bg-light">
                        <tr>
                          <th scope="col" class="border-1">#</th>
                          <th scope="col" class="border-1">Name of Workshop</th>
                          <th scope="col" class="border-1">Duration</th>
                          <th scope="col" class="border-1">No of participants</th>
                          <th scope="col" class="border-1">Total fund Received</th>
                          <th scope="col" class="border-1">Name of Coordinator</th>
                          <th scope="col" class="border-1">Added By</th>
                         <th scope="col" class="border-1">Document</th>
                           <th scope="col" class="border-1">Added On</th>
                          <th scope="col" class="border-1">Status</th>
                          <th scope="col" class="border-1">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php $i=1; foreach($iitremote_list as $list){ ?>
                        <tr>
                          <td><?php echo $i; ?></td>
                          <td><?php echo $list['workshop']; ?></td>
                    
                          <td><?php echo $list['duration']; ?></td>
                       
                          <td><?php echo $list['participants']; ?></td>
                        
                          <td><?php echo $list['fund']; ?></td>
                          <td><?php echo $list['coordinator']; ?></td>

                          <td>
                          <?php 
                          $usr=$this->Common_model->getAll("users",array('id'=>$list['added_by']))->row_array();
                          echo $usr['fullname']; ?>
                          </td>
                          <td>
                          <a href=" <?php echo base_url('uploads/iitremort/'); ?><?php echo $list['file'];  ?>"> <img width="40px"src="<?php echo base_url('assets/images/pdf_logo.png'); ?>"/>   </a>
                          
                          </td>
                          <td><?php echo $list['datetime_added']; ?></td>
                      <td style="color:<?php if($list['status']=='1'){ ?>orange <?php }elseif($list['status']=='2'){ echo "green"; } elseif($list['status']=='3'){ echo "blue";} else{ echo "red"; } ?>" ><?php 
                          $st=$this->Common_model->getAll("master_status",array('id'=>$list['status']))->row_array();
                          echo $st['status']; 
                          ?></td>
                         
                          <td>

                          <?php  
                          $view_permissions = explode(',',$permission['view_p']);
                        
                          if(in_array($this->tank_auth->get_user_id(),$view_permissions)){
                          ?>
                           <?php echo form_open($view_details); ?>
                          <input type="hidden" name="id" value="<?php echo $list['id']; ?>">
                          <button type="submit" class="mb-2 btn btn-sm btn-primary mr-1">Details</button>
                          </form>
                          
                          <?php
                          }
                          ?>
                         

                        
                          <?php if($userinfo['type']=='2') { ?>
                          <?php echo form_open($verify_data); ?>
                          <input type="hidden" name="id" value="<?php echo $list['id']; ?>">
                          <?php if ($list['verified']=='0'){?>
                          <button type="submit" class="mb-2 btn btn-sm btn-warning mr-1">Verify</button>
                          <?php } else{ ?>
                          <button type="submit" disabled="disabled" class="mb-2 btn btn-sm btn-success mr-1">Verified</button>
                          <?php } ?>
                          </form>
                          <?php } ?>

                     
                          <?php 
                          $edit_permission=explode(',',$permission['edit_p']);
                          if(in_array($this->tank_auth->get_user_id(),$edit_permission)){
                            ?>
                       <?php echo form_open($edit_data); ?>
                          <input type="hidden" name="id" value="<?php echo $list['id']; ?>">
                          <button type="submit" class="mb-2 btn btn-sm btn-info mr-1">Edit</button>
                          </form>
                          <?php
                         } ?>
                         <?php 
                         $delete_permission=explode(",",$permission['delete_p']);
                         if(in_array($this->tank_auth->get_user_id(),$delete_permission)){
                         ?>
                          <?php echo form_open($delete_data); ?>
                          <input type="hidden" name="id" value="<?php echo $list['id']; ?>">
                          <button type="submit" class="mb-2 btn btn-sm btn-danger mr-1">Delete</button>
                          </form>
                         <?php  }
                         ?>


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