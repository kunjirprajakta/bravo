
<div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Edit the Data</h2>
            </div>
          </header>
<!-- Breadcrumb-->
          <ul class="breadcrumb">
            <div class="container-fluid">
              <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Home</a></li>
              <li class="breadcrumb-item active">Complete Auction after Bidding</li>
            </div>
          </ul>




          <section class="tables">   
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-close">
                    </div>
                    <div class="card-header d-flex align-items-center">
                      <h4 class="h4">Auction</h4>
                      </a>
                    </div>
                    <div class="card-body">
                      
                      <table border="1" width="100%" id="dataCSV">
                       
						
						<?php
						foreach($lotlist as $printData){ ?>
						
						<thead>
                          <tr>
                            <td>Description</td>
                            <td><?php echo $printData['lot_description']; ?></td>
                            <td>Type</td>
                            <td>Forward</td>
                          </tr>
                          <tr>
                            <td>Date Of Auction</td>
                            <td><?php echo $printData['lot_start_date']; ?></td>
                            <td>Lot Number</td>
                            <td><?php echo $printData['lot_number']; ?></td>
                          </tr>
						  
                          <tr>
                            <td><b>#</b></td>
                            <td><b>Buyer</b></td>
                            <td><b>Amount</b></td>
                            <td><b>Date / Time</b></td>
                            <td><b>Action</b></td>
                          </tr>
                        </thead>
                        <?php $i=1; 
						$data['lotData'] = $this->Common_model->getAllData("tb_bidding",array("lot_id"=>$printData['id_lot']),"DESC","id_bidding")->result_array();
			foreach($data['lotData'] as $printData1){ ?>
			              
                          <tr>
                              <?php echo form_open_multipart($update_data); ?>
			              <input type="hidden" name="id_bidding" value="<?php echo $printData1['id_bidding']; ?>">
                            <td><?php echo $i; ?></td>
                            <td>
                                <select name="buyer_id">
                                    <?php $data['buyers_list'] = $this->Common_model->getAll("tb_buyers")->result_array();
                                    foreach($data['buyers_list'] as $buyers){
                                    ?>
                                    <option value="<?php echo $buyers['buyer_id']; ?>" <?php if($buyers['buyer_company_name']==$printData1['buyer_company_name']){ ?> selected="selected" <?php } ?> ><?php echo $buyers['buyer_company_name']; ?></option>
                                    <?php } ?>
                                </select>
                                
                            </td>
                            <td>
                                <input type="text" value="<?php echo $printData1['bidding_price']; ?>" name="bidding_price">
                            </td>
                            <td>
                                <input type="text" value="<?php echo $printData1['bid_time']; ?>" name="bid_time">
                            </td>
                            <td>
                                <input type="submit" value="EDIT">
                            </td>
                             
                      </form>
                          </tr> 
						 
						  
                         <?php $i=$i+1; } ?>
							<tr>
						              <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          
						</tr>
						<tr>
						              <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          
						</tr>
						<?php } ?>

                      </table>
                      

                    </div>
                  </div>
                </div>

            <!---dashboard start -->
            
              </div>
            </div>
          </section>

  