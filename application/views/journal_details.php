
<div class="main-content-container container-fluid px-4">
            <!-- Page Header -->
            <div class="page-header row no-gutters py-4">
              <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
<span class="text-uppercase page-subtitle">Students/<a href="<?php echo base_url('index.php/journal') ?>" >Journal Papers</a><?php if(isset($edit_data)) { ?>/edit <?php } ?></span>
<h3 class="page-title">Journal Papers : <?php echo $view_details_info['title']; ?> </h3>
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
                        Name of Faculty :
                        </td>
                        <td>
                        <?php echo $view_details_info['faculty']; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        Title of Paper:
                        </td>
                        <td>
                        <?php echo $view_details_info['title']; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        Authors:
                        </td>
                        <td>
                        <?php echo $view_details_info['authors']; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        Name of Journal:
                        </td>
                        <td>
                        <?php echo $view_details_info['journal']; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        ISSN NO:
                        </td>
                        <td>
                        <?php echo $view_details_info['issn']; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        Volume:
                        </td>
                        <td>
                        <?php echo $view_details_info['volume']; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                       Pages:
                        </td>
                        <td>
                        <?php echo $view_details_info['pages']; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                       Year:
                        </td>
                        <td>
                        <?php echo $view_details_info['publication_year']; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                   Type of paper:
                        </td>
                        <td>
                        <?php echo $view_details_info['type_of_paper']; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                       Type:
                        </td>
                        <td>
                        <?php echo $view_details_info['type']; ?>
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
                        Note:
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

            <embed src="<?php echo base_url('uploads/journal/'); ?><?php echo $view_details_info['file'];  ?>" type="application/pdf" width="100%" height="600px" />