<?php
include "header.php";

Global $arr;

?>

    
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h2 class="sub-header"><?php echo $heading; ?></h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Hospital Name</th>
                  <th>No. of Hospitals</th>
                </tr>
              </thead>
              <tbody>

              <?php
              foreach ($arr as $key => $value) { ?>
				<tr>
                  <td><?php echo $key + 1 ;?></td>
                  <td><?php echo $value['name'];?></td>
                  <td><?php echo $value['no_of_doctors'];?></td>
                </tr>
				<?php	}	?>
                
              </tbody>
            </table>
          </div>
        </div>
      

<?php
include "footer.php";
?>