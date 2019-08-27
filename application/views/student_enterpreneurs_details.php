
<div class="main-content-container container-fluid px-4">
            <!-- Page Header -->
            <div class="page-header row no-gutters py-4">
              <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
<span class="text-uppercase page-subtitle">Students/<a href="<?php echo base_url('index.php/student_enterpreneurs') ?>" >Student Enterpreneurs</a><?php if(isset($edit_data)) { ?>/edit <?php } ?></span>
<h3 class="page-title">Student Enterpreneurs <?php echo $view_details_info['student_name']; ?> </h3>
              </div>
            </div>
            <!-- End Page Header -->
            <!-- Default Light Table -->
            <div class="row">


            <div class="col">
                <div class="card card-small mb-4">
                  <div class="card-header border-bottom">
                    <h6 class="m-0">Details</h6>
                  </div>
                  <div class="card-body p-0 pb-3 text-center">
                    <table class="table mb-0">
                      
                      <tbody>
                      
                    <tr>
                        <td>
                        Department:
                        </td>
                        <td>
                        <?php 
                        $dept=$this->Common_model->getAll("departments",array('id'=>$view_details_info['department_id']))->row_array();
                        echo $dept['department'];
                         ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        Student Name:
                        </td>
                        <td>
                        <?php echo $view_details_info['student_name']; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        Company Name:
                        </td>
                        <td>
                        <?php echo $view_details_info['company_name']; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        Company Address:
                        </td>
                        <td>
                        <?php echo $view_details_info['company_address']; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        Website:
                        </td>
                        <td>
                        <?php echo $view_details_info['website']; ?>
                        </td>
                    </tr>
                    
                    
                     
                    <tr>
                        <td>
                        Status:
                        </td>
                        <td>
                        <?php 
                        $st=$this->Common_model->getAll("master_status",array('id'=>$view_details_info['status']))->row_array();
                        echo $st['status']; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        Added / Updated By:
                        </td>
                        <td>
                        <?php
                        $usr=$this->Common_model->getAll("users",array('id'=>$view_details_info['added_by']))->row_array();
                        echo $usr['fullname']; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        Verified Status:
                        </td>
                        <td>
                        <?php if($view_details_info['verified']=='1'){?>
                        <img width="40px"src="<?php echo base_url('assets/images/verified.png'); ?>"/>
                        <?php }else{?>
                        <img width="40px"src="<?php echo base_url('assets/images/not_verified.png'); ?>"/>
                        <?php } ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        Remark:
                        </td>
                        <td>
                        <?php echo $view_details_info['remark']; ?>
                        </td>
                    </tr>
                    
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Default Light Table -->

