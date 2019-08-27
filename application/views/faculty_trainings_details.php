
<div class="main-content-container container-fluid px-4">
            <!-- Page Header -->
            <div class="page-header row no-gutters py-4">
              <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
<span class="text-uppercase page-subtitle">Students/<a href="<?php echo base_url('index.php/faculty_trainings') ?>" >Faculty Trainings in Industry</a><?php if(isset($edit_data)) { ?>/edit <?php } ?></span>
<h3 class="page-title">Faculty Trainings in Industry : <?php echo $view_details_info['faculty_name']; ?> </h3>
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
                         Year:
                        </td>
                        <td>
                        <?php 
                        $year=$this->Common_model->getAll("academic_years",array('id'=>$view_details_info['academic_year']))->row_array();
                        echo $year['year']; ?>
                        </td>
                    </tr>
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
                        Faculty Name:
                        </td>
                        <td>
                        <?php echo $view_details_info['faculty_name']; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        Industry Name:
                        </td>
                        <td>
                        <?php echo $view_details_info['industry']; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        Details:
                        </td>
                        <td>
                        <?php echo $view_details_info['details']; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        Email:
                        </td>
                        <td>
                        <?php echo $view_details_info['email']; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        Financial Support:
                        </td>
                        <td>
                        <?php echo $view_details_info['financial_support']; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        Designation:
                        </td>
                        <td>
                        <?php echo $view_details_info['designation']; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        No. Of Days:
                        </td>
                        <td>
                        <?php echo $view_details_info['no_of_days']; ?>
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
                    <tr>
                        <td>
                        Start Date:
                        </td>
                        <td>
                        <?php echo $view_details_info['start_date']; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        End Date:
                        </td>
                        <td>
                        <?php echo $view_details_info['end_date']; ?>
                        </td>
                    </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Default Light Table -->

            <embed src="<?php echo base_url('uploads/faculty_trainings/'); ?><?php echo $view_details_info['file'];  ?>" type="application/pdf" width="100%" height="600px" />