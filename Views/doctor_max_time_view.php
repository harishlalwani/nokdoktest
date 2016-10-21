<?php
include "header.php";

Global $arr;

?>

    
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h2 class="sub-header">Maximum Time Spent by Doctor in Hospital</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Doctor Name</th>
                  <th>Hospital Name</th>
                  <th>Time Spent in Hospital</th>
                </tr>
              </thead>
              <tbody>

              <?php
              foreach ($arr as $key => $value) { ?>
				        <tr>
                  <td><?php echo $key ;?></td>
                  <td><?php echo $value['doc_name'];?></td>
                  <td><?php echo $value['name'];?></td>
                  <td><?php echo $value['time_max'];?></td>
                </tr>
				      <?php	}	?>
                
              </tbody>
            </table>
          </div>
        </div>
      

<?php
include "footer.php";
?>