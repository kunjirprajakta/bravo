<div class="main-content-container container-fluid px-4">
            <!-- Page Header -->
            <div class="page-header row no-gutters py-4">
              <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
<span class="text-uppercase page-subtitle">Masteres/<a href="<?php echo base_url('index.php/users_management') ?>" >Users</a><?php if(isset($edit_data)) { ?>/edit <?php } ?></span>
<h3 class="page-title"><?php if(isset($edit_data)) { ?>Edit Data for <?php echo $edit_data['fullname'] ?> <?php } else{ ?> Users Management <?php } ?></h3>
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
                <h6 class="m-0">User Add</h6>
                </div>
                <div class="card-body d-flex flex-column">
                <?php if(!isset($edit_data)){ echo form_open_multipart($add_user);} else{ echo form_open_multipart($edit_form); } ?>
                    <div class="form-group">
                    <label for="Name">Name</label>
<input type="text" class="form-control" name="fullname"  placeholder="Full Name Here" <?php if(isset($edit_data)) { ?> value="<?php echo $edit_data['fullname']; ?>" <?php } ?> required="required"> 
                    </div>
                    <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email"  placeholder="" <?php if(isset($edit_data)) { ?> value="<?php echo $edit_data['email']; ?>" <?php } ?> required="required"> 
                    </div>
                    <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="phone" class="form-control" name="mobile"  placeholder="" <?php if(isset($edit_data)) { ?> value="<?php echo $edit_data['mobile']; ?>" <?php } ?> required="required"> 
                    </div>
                    <div class="form-group">
                    <label for="Password">Password</label>
                    <input type="text" class="form-control" name="password"  placeholder="Set Password Here" required="required"> 
                    </div>
                    <div class="form-group">
                    <label for="College">College</label>
                    <select name="college_id" id="" class="form-control">
                        <?php foreach($college_list as $clg){?>
                        <option value="<?php echo $clg['id']; ?>" <?php if(isset($edit_data)&&$edit_data['college_id']==$clg['id']){ ?> selected="selected" <?php } ?> ><?php echo $clg['college']; ?></option>
                        <?php } ?>
                    </select> 
                    </div>
                    <div class="form-group">
                    <label for="Department">Department</label>
                    <select name="department_id" id="" class="form-control">
                         <?php foreach($department_list as $dept){?>
                         <option value="<?php echo $dept['id']; ?>" <?php if(isset($edit_data)&&$edit_data['department_id']==$dept['id']){ ?> selected="selected" <?php } ?> ><?php echo $dept['department']; ?> </option>
                        <?php } ?>
                    </select>
                    </div>
                    <div class="form-group">
                    <label for="Type">Type Of User</label>
                    <select name="type" id="" class="form-control">
                        <?php foreach($user_type_list as $type){?>
                        <option value="<?php echo $type['id']; ?>" <?php if(isset($edit_data)&&$edit_data['type']==$type['id']){ ?> selected="selected" <?php } ?> ><?php echo $type['type']; ?></option>
                        <?php } ?>
                    </select>
                    </div>
                    <div class="form-group mb-0">
                        <?php if(isset($edit_data)){ ?> <input type="hidden" name="id" value="<?php echo $id; ?>"> <?php } ?>
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
                          <th scope="col" class="border-1">Full Name</th>
                          <th scope="col" class="border-1">Department</th>
                          <th scope="col" class="border-1">Email</th>
                          <th scope="col" class="border-1">Mobile</th>
                          <th scope="col" class="border-1">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php $i=1; foreach($users_list as $list){ ?>
                        <tr>
                          <td><?php echo $i; ?></td>
                          
                          <td>
                          <?php echo $list['fullname']; ?><br>
                       <span style="font-size:10px"><?php  echo $list['last_login']; ?></p></span>

                      </td>
                          
                          <?php 
                          $dept=$this->Common_model->getAll("departments",array('id'=>$list['department_id']))->row_array();
                          echo $dept['department']; 
                          
                          ?>
                          
                          </td>
                          <td><?php echo $list['email']; ?></td>
                          <td><?php echo $list['mobile']; ?></td>
                          <td>
                          <?php if($userinfo['type']=='1') { ?>
                          <?php echo form_open($delete_user); ?>
                          <input type="hidden" name="id" value="<?php echo $list['id']; ?>">
                          <button type="submit" class="mb-2 btn btn-sm btn-danger mr-1">Delete</button>
                          </form>
                          <?php } ?>
                          <?php echo form_open($edit_user); ?>
                          <input type="hidden" name="id" value="<?php echo $list['id']; ?>">
                          <button type="submit" <?php if($userinfo['type']!='1') { echo "disabled"; }?>  class="mb-2 btn btn-sm btn-info mr-1">Edit</button>
                          </form>
                          <?php if($userinfo['type']=='1') { ?>
                          <?php echo form_open($bann_user);?>
                          <input type="hidden" name="id" value="<?php echo $list['id']; ?>">
                          <?php if ($list['banned']=='0'){?>
                          <button type="submit" class="mb-2 btn btn-sm btn-warning mr-1">banned</button>
                          <?php } else{ ?>
                          <button type="submit" disabled="disabled" class="mb-2 btn btn-sm btn-success mr-1">banned</button>
                          <?php } ?>

                          </form>
                          <?php } ?>

                          <?php if($userinfo['type']=='1') { ?>
                            <?php echo form_open($permission); ?>
                            <input type="hidden" name="id" value="<?php echo $list['id']; ?>">
                          <button type="submit" class="mb-2 btn btn-sm btn-danger mr-1">Permission</button>
                          </form>
                          <?php } ?>



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