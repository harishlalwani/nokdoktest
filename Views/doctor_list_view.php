<?php
include "header.php";

Global $arr, $r, $repeatArr;

?>

    
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h2 class="sub-header">Doctor List with hospital Repeats</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Doctor Name</th>
                  <th>Hospital Name</th>
                  <th>Time Spent in Hospital</th>
                  <th>Repeats</th>
                </tr>
              </thead>
              <tbody>

              <?php
              $doctor_id = 0; 
              foreach ($arr as $key => $value) { 
                if($r[$value['doctor_id']] != 0)
                $r[$value['doctor_id']] = round($r[$value['doctor_id']]/ 2);

                if( $doctor_id != $value['doctor_id'])
                {
                    $doctor_id = $value['doctor_id'];
                    $c = 0;
                ?>

                <tr>
                  <td><?php echo $key + 1 ;?></td>
                  <td><?php echo $value['doc_name'];?></td>
                  
                </tr>
                <tr>
                  <td></td>
                  <td></td>
                  <td><?php echo $value['name'];?></td>
                  <td><?php echo $value['start_time'] ."-". $value['end_time'] ;?></td>
                  <?php if($c == $r[$value['doctor_id']]) { ?>
                    <td><?php echo array_sum($repeatArr[$value['doctor_id']]) ." repeats ";?></td>
                  <?php } else  { ?>
                  <td></td>
                <?php } ?>
                </tr>
                <?php 
                }
                else
                { 
                  $c++;

                  ?>
                <tr>
                  <td></td>
                  <td></td>
                  <td><?php echo $value['name'];?></td>
                  <td><?php echo $value['start_time'] ."-". $value['end_time'] ;?></td>
                  <?php if($c == $r[$value['doctor_id']]) { ?>
                    <td><?php echo array_sum($repeatArr[$value['doctor_id']]) ." repeats ";?></td>
                  <?php }else{ ?>
                    <td></td>
                  <?php } ?>
                </tr>

               <?php 
                  }
                ?>
                  
                  
                    
                
              <?php } ?>
                
              </tbody>
            </table>
          </div>
        </div>
      

<?php
include "footer.php";
