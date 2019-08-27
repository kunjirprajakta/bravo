<div class="main-content-container container-fluid px-4">
            <!-- Page Header -->
            <div class="page-header row no-gutters py-4">
              <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
<span class="text-uppercase page-subtitle">Students/<a href="<?php echo base_url('index.php/webinar') ?>" >Journal Papers</a><?php if(isset($edit_data)) { ?>/edit <?php } ?></span>
<h3 class="page-title"><?php if(isset($edit_data_info)) { ?>Edit Data for <?php echo $edit_data_info['title'] ?> <?php } else{ ?> Journal Papers <?php } ?></h3>
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
                <h6 class="m-0">Webinar</h6>
                </div>
               <?php $add_permissions=explode(',',$permission['add_p']);
                if(in_array($this->tank_auth->get_user_id(),$add_permissions))?><?php{
                ?>
                <div class="card-body d-flex flex-column form-row">
                <?php if(!isset($edit_data_info)){echo form_open_multipart($add_data); } else { echo form_open_multipart($edit_form);}?>     
                    <div class="form-row">
                        
                      <div class="form-group col-md-4">
                        <label for="Title">Paper Title</label>
                         <input type="text" name="title" class="form-control" <?php if(isset($edit_data_info)){?> value="<?php echo $edit_data_info['title'] ?>" <?php } ?>  placeholder="Name of Coordinator" required="required">
                      </div>
                      <div class="form-group col-md-4">
                        <label for="department">Department</label>
                        <select name="department_id" id="" class="form-control">
                         <?php foreach($department_list as $dept){?>
                         <option value="<?php echo $dept['id']; ?>" <?php if(isset($edit_data_info) && $edit_data_info['department_id']== $dept['id']) {?> selected="selected" <?php } ?> ><?php echo $dept['department']; ?> </option>
                        <?php } ?>
                        </select> 
                       </div>
                      <div class="form-group col-md-4">
                        <label for="Journal">Name of Journal</label>
                         <input type="text" name="journal" class="form-control" <?php if(isset($edit_data_info)){?> value="<?php echo $edit_data_info['journal'] ?>" <?php } ?>  placeholder="Name of Coordinator" required="required">
                      </div>
                      <div class="form-group col-md-4">
                        <label for="Faculty">Name Of Faculty</label>
                        <input type="text" name="faculty" <?php if(isset($edit_data_info)){?> value="<?php echo $edit_data_info['faculty'] ?>" <?php } ?> class="form-control" placeholder="Name of Expert / External Organisation" required="required">
                      </div>
                      <div class="form-group col-md-4">
                        <label for="Authors">Authors</label>
                        <input type="text" name="authors" <?php if(isset($edit_data_info)){?> value="<?php echo $edit_data_info['authors'] ?>" <?php } ?> class="form-control" placeholder="Authors" required="required">
                      </div>
                   
                      <div class="form-group col-md-4">
                        <label for="ISSN">ISSN NO</label>
                        <input type="text" name="issn" <?php if(isset($edit_data_info)){?> value="<?php echo $edit_data_info['issn'] ?>" <?php } ?> class="form-control" placeholder="Authors" required="required">
                      </div>
                      
                      <div class="form-group col-md-4">
                        <label for="Volume">Volume</label>
                        <input type="text" name="volume" <?php if(isset($edit_data_info)){?> value="<?php echo $edit_data_info['volume'] ?>" <?php } ?> class="form-control" placeholder="Authors" required="required">
                      </div>
                      <div class="form-group col-md-4">
                        <label for="Pages">Pages</label>
                        <input type="text" name="pages" <?php if(isset($edit_data_info)){?> value="<?php echo $edit_data_info['pages'] ?>" <?php } ?> class="form-control" placeholder="Authors" required="required">
                      </div>
                      <div class="form-group col-md-4">
                        <label for="Year">Publication Year</label>
                        <input type="text" name="publication_year" <?php if(isset($edit_data_info)){?> value="<?php echo $edit_data_info['publication_year'] ?>" <?php } ?> class="form-control" placeholder="" required="required">
                      </div>
                      </div>
                      <div class="form-group col-md-4">
                        <label for="Paper">Type of paper</label>
                        <select name="type_of_paper" class="form-control">
                      <option>Journal</option>
                      <option>Conerence</option>
                      </select>
                      </div>
                      <div class="form-group col-md-4">
                      <label for="Type">Type</label>
                      <select name="type" class="form-control">
                      <option>National</option>
                      <option>International</option>
                      </select>
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
                          <th scope="col" class="border-1">Title</th>
                          <th scope="col" class="border-1">Department</th>
                          <th scope="col" class="border-1">Authors</th>
                          <th scope="col" class="border-1">Name of Faculty</th>

                          <th scope="col" class="border-1">Name of Journal</th>
                          <th scope="col" class="border-1">ISSN NO.</th>
                          <th scope="col" class="border-1">Volume</th>
                          <th scope="col" class="border-1">Pages</th>

                          <th scope="col" class="border-1">Publication Year</th>
                          <th scope="col" class="border-1">Type</th>
                          <th scope="col" class="border-1">Type of Paper</th>

                          <th scope="col" class="border-1">Added By</th>
                         <th scope="col" class="border-1">Document</th>
                           <th scope="col" class="border-1">Added On</th>
                          <th scope="col" class="border-1">Status</th>
                          <th scope="col" class="border-1">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php $i=1; foreach($journal_list as $list){ ?>
                        <tr>
                          <td><?php echo $i; ?></td>
                          <td><?php echo $list['title']; ?></td>
                          <td>
                          <?php 
                          $dept=$this->Common_model->getAll("departments",array('id'=>$list['department_id']))->row_array();
                          echo $dept['department']; 
                          
                          ?>
                          
                          </td>
                          <td><?php echo $list['authors']; ?></td>
                       
                          <td><?php echo $list['faculty']; ?></td>
                        
                          <td><?php echo $list['journal']; ?></td>
                          <td><?php echo $list['issn']; ?></td>
                          <td><?php echo $list['volume']; ?></td>
                          <td><?php echo $list['pages']; ?></td>

                          <td><?php echo $list['publication_year']; ?></td>
                          <td><?php echo $list['type']; ?></td>
                          <td><?php echo $list['type_of_paper']; ?></td>



                          
                          <td>
                          <?php 
                          $usr=$this->Common_model->getAll("users",array('id'=>$list['added_by']))->row_array();
                          echo $usr['fullname']; ?>
                          </td>
                          <td>
                          <a href=" <?php echo base_url('uploads/journal/'); ?><?php echo $list['file'];  ?>"> <img width="40px"src="<?php echo base_url('assets/images/pdf_logo.png'); ?>"/>   </a>
                          
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