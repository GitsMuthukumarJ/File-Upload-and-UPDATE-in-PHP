<section class="forms"> 
            <div class="container-fluid">
              <div class="row">
                <!-- Basic Form-->
                <div class="col-lg-6">
                  <div class="card">
                    <div class="card-close">
                      <div class="dropdown">
                        <button type="button" id="closeCard1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                        <div aria-labelledby="closeCard1" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a></div>
                      </div>
                    </div>
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4"><?php echo $row['doctor_speciality']; ?> Profile Picture Edit </h3>
                    </div>
                    <div class="card-body">

                      <form action="" method="post" enctype="multipart/form-data">
			<div class="form-group row">
                          <label class="col-sm-3 form-control-label">Doctor ID</label>
                          <div class="col-sm-9">
                            <input name="id" placeholder="ID" class="form-control" value="<?php echo $row['doctor_id']; ?>" readonly>                        
			  </div>
                        </div>

                        

			<div class="form-group row">
                          <label class="col-sm-3 form-control-label">Profile Picture Link</label>
                          <div class="col-sm-9">
                            <input name="doctor_speciality" type="text" placeholder="No Profile Picture" class="form-control" value="<?php echo $row['doctor_image']; ?>" readonly>                    
			  </div>
                        </div>

			<!-- <div class="col-sm-5"><button name="upload" type="submit" class="btn btn-lg btn-success btn-block">&nbsp;Upload</button></div> -->
			
			<div class="form-group row">
			<label class="col-sm-3 form-control-label">Profile Photo</label>
			</div>
			<?php if($q=1) echo '<div class="form-group row"><label class="col-sm-2 form-control-label">Upload</label><div class="col-sm-5"><input type="file" name="photo" id="fileSelect" class="form-control" ></div></div>'; ?>
			
			<?php 
                           if($q==1 & $row['doctor_image'] != '')
				echo '<a href="'.$row['doctor_image'].'" target="_blank"><p><img src="'.$row['doctor_image'].'"  alt="Doctor Photo" class="img-thumbnail" width="200" height="160" /></p><br></a>';
				?>
			
			
			                        
		      <div>
                        <button name="submit" type="submit" class="btn btn-lg btn-info btn-block">
                        &nbsp;Save</button>
                        </div>

			<br>


                	
                        

                      </form>
                    </div>
                  </div>
                </div>
          <?php }} ?>

         <!-- Page Footer-->
          <footer class="main-footer">
            <div class="container-fluid">
              <div class="row">
                <div class="col-sm-6">
                  <p>Dr.Galen &copy; 2018-2019</p>
                </div>
                
              </div>
            </div>
          </footer>
        </div>
      </div>
