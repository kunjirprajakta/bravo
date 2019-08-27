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
                          <th scope="col" class="border-1">Form Name</th>
                          <th scope="col" class="border-1">Controller</th>

                          <th scope="col" class="border-1">add</th>
                        

                          <th scope="col" class="border-1">delete </th>
                          <th scope="col" class="border-1">edit</th>
                        
                        </tr>
                      </thead>
                      <tbody>
                      <?php $i=1; foreach($permission_details as $list){ ?>
                        <tr>
                          <td><?php echo $i; ?></td>
                          
                          <td>

                          <?php echo $list['form_name']; ?>
                          </td>
                          <td>
                        <?php echo $list['controller']; ?>
                        </td>
                        <?php 
                 $add_p=explode(',',$list['add_p']);
                $view_p=explode(',',$list['view_p']);  
                $edit_p=explode(',',$list['edit_p']);
                $delete_p=explode(',',$list['delete_p']);?>
                        <?php// print_r($list);?>
                        <td>
                        <input type="checkbox" name="add_p"  <?php if(in_array($id,$add_p)) echo("checked")?> >
                        </td>
                        <td>
                        <input type="checkbox" name="view_p" <?php if(in_array($id,$view_p)) echo("checked")?> >
                        </td>
                        <td>
                        <input type="checkbox" name="delete_p" <?php if(in_array($id,$delete_p)) echo("checked")?> >
                        </td>
                        </td>
                        <td>
                        <input type="checkbox" name="edit_p" <?php if (in_array($id,$edit_p)) echo ("checked")?>>
                        </td>
                        </td>
                       <?php $i=$i+1; } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            </div>