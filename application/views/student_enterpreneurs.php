<div class="main-content-container container-fluid px-4">
            <!-- Page Header -->
            <div class="page-header row no-gutters py-4">
              <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
<span class="text-uppercase page-subtitle">Students/<a href="<?php echo base_url('index.php/skillbased') ?>" >Student Enterpreneurs</a><?php if(isset($edit_data)) { ?>/edit <?php } ?></span>
<h3 class="page-title"><?php if(isset($edit_data_info)) { ?>Edit Data for <?php echo $edit_data_info['student_name'] ?> <?php } else{ ?> Student Enterpreneurs <?php } ?></h3>
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
                <h6 class="m-0">Student Enterpreneurs</h6>
                </div>
                <div class="card-body d-flex flex-column form-row">
                <?php if(!isset($edit_data_info)){echo form_open_multipart($add_data); } else { echo form_open_multipart($edit_form);}?>     
                    <div class="form-row">
                      
                        <div class="form-group col-md-4">
                        <label for="department">Department</label>
                        <select name="department_id" id="" class="form-control">
                         <?php foreach($department_list as $dept){?>
                         <option value="<?php echo $dept['id']; ?>" <?php if(isset($edit_data_info) && $edit_data_info['department_id']== $dept['id']) {?> selected="selected" <?php } ?> ><?php echo $dept['department']; ?> </option>
                        <?php } ?>
                        </select> 
                        </div>
                        <div class="form-group col-md-6">
                        <label for="student_name">Student Nmae</label>
                         <input type="text" name="student_name" class="form-control" <?php if (isset($edit_data_info)){?> value="<?php echo $edit_data_info['student_name']; ?>"<?php } ?> placeholder="Name of Student" required="required">
                        </div>
                        <div class="form-group col-md-6">
                        <label for="year">Year</label>
                         <input type="text" name="year" class="form-control" <?php if (isset($edit_data_info)){?> value="<?php echo $edit_data_info['year']; ?>"<?php } ?> placeholder="" required="required">
                        </div>
                    
                      <div class="form-group col-md-4">
                        <label for="company_name">Company Nmae</label>
                         <input type="text" name="company_name" class="form-control" <?php if(isset($edit_data_info)){?> value="<?php echo $edit_data_info['company_name'] ?>" <?php } ?>  placeholder="Name of Coordinator" required="required">
                      </div>
                      <div class="form-group col-md-4">
                        <label for="Company_address">Company Address</label>
                        <input type="text" name="company_address" <?php if(isset($edit_data_info)){?> value="<?php echo $edit_data_info['company_address'] ?>" <?php } ?> class="form-control" placeholder="Name of Expert / External Organisation" required="required">
                      </div>
                      <div class="form-group col-md-4">
                        <label for="Website">Website</label>
                        <input type="text" name="website" <?php if(isset($edit_data_info)){?> value="<?php echo $edit_data_info['website'] ?>" <?php } ?> class="form-control" placeholder="Website" required="required">
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
                        <label for="remark">Note / Remark</label>
                        <textarea name="remark"  class="form-control" required="required">
                        <?php if(isset($edit_data_info)){?> <?php echo $edit_data_info['remark'] ?> <?php } ?>
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
                          <th scope="col" class="border-1">Department</th>
                          
                          <th scope="col" class="border-1">Student Name</th>
                          <th scope="col" class="border-1">Company Name</th>
                          <th scope="col" class="border-1">Company Address</th>
                          <th scope="col" class="bordeWebsiter-1">Website</th>
                          <th scope="col" class="bordeWebsiter-1">added_by</th>

                          <th scope="col" class="border-1">Status</th>
                          <th scope="col" class="border-1">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php $i=1; foreach($enterpreneurs_list as $list){ ?>
                        <tr>
                          <td><?php echo $i; ?></td>
                          <td>
                          <?php 
                          $dept=$this->Common_model->getAll("departments",array('id'=>$list['department_id']))->row_array();
                          echo $dept['department']; 
                          
                          ?>
                          
                          </td>
                          <td><?php echo $list['student_name']; ?></td>

                          
                        
                
                          <td><?php echo $list['company_name']; ?></td>
                          
                        
                
                          <td><?php echo $list['company_address']; ?></td>
                          
                        
                      
                          <td><?php echo $list['website']; ?></td>
                          
                          <td>
                          <?php 
                          $usr=$this->Common_model->getAll("users",array('id'=>$list['added_by']))->row_array();
                          echo $usr['fullname']; ?>
                          </td>
                        
                      <td style="color:<?php if($list['status']=='1'){ ?>orange <?php }elseif($list['status']=='2'){ echo "green"; } elseif($list['status']=='3'){ echo "blue";} else{ echo "red"; } ?>" ><?php 
                          $st=$this->Common_model->getAll("master_status",array('id'=>$list['status']))->row_array();
                          echo $st['status']; 
                          ?></td>
                         
                          <td>

                          <?php echo form_open($view_details); ?>
                          <input type="hidden" name="id" value="<?php echo $list['id']; ?>">
                          <button type="submit" class="mb-2 btn btn-sm btn-primary mr-1">Details</button>
                          </form>
                          

                        
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





                          <?php echo form_open($edit_data); ?>
                          <input type="hidden" name="id" value="<?php echo $list['id']; ?>">
                          <button type="submit" class="mb-2 btn btn-sm btn-info mr-1">Edit</button>
                          </form>

                          <?php echo form_open($delete_data); ?>
                          <input type="hidden" name="id" value="<?php echo $list['id']; ?>">
                          <button type="submit" class="mb-2 btn btn-sm btn-danger mr-1">Delete</button>
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