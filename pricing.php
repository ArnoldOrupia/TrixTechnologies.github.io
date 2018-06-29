<?php include_once("include/dbconnect.php");
include_once("include/header.php");
?>

  <!-- end header -->

     <!-- Breadcrumbs -->

  <div class="breadcrumbs">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <ul>
            <li class="home"> <a title="Go to Home Page" href="index.php">Home</a><span>&raquo;</span></li>

            <li><strong>Pricing</strong></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- Breadcrumbs End -->

  <!-- Main Container -->
  <section class="main-container col1-layout">
    <div class="main container">
      <div class="row">
        <section class="col-main col-sm-12">

          <div id="contact" class="page-content page-contact">

            <div class="row">
              <div class="col-md-3" id="contact_form_map">

              <div class="page-title">

            <h2>Contact Us</h2>
          </div>
            <div id="message-box-conact">Find Us...</div>
                <br/>
                <ul class="store_info">
                  <li><i class="fa fa-home"></i>Kisumu Kenya P.O BOX 7031-40100</li>
                  <li><i class="fa fa-phone"></i><span>+ 012 315 678 1234</span></li>
                  <li><i class="fa fa-fax"></i><span>+012 315 678 1234</span></li>
                  <li><i class="fa fa-envelope"></i>Email: <span><a href="mailto:support@justtheme.com">vsoftlimited@gmail.com</a></span></li>
                </ul>
                </br>
          <div style="background-color: red; padding: 20px">
          <div class="page-title">
            <h3 style="border-bottom: 1px dotted white ;">Core Technologies</h3>
          </div>
                <br/>
                <ul style="color: white" class = "store_info">
						<li>PHP $ PHP frameworks</li>
						<li>JS $ its frameworks</li>
						<li>JAVA</li>
                        <li>MSSQL, MySQL</li>
                        <li>NodeJS, Angular</li>
                        <li>JAVA</li>
					</ul>
              </div>
              </div>
              <div class="col-md-7">
              <form method="post">
                <h3 class="page-subheading">Make an enquiry</h3>
                <?php
                if(isset($_POST['submit'])){
                  $fname=$_POST['fname'];
                  $lname = $_POST['lname'];
                  $phone=$_POST['phone'];
                  $email=$_POST['email'];
                  $organization=$_POST['organization'];
                  $employees=$_POST['employees'];
                  $new_software=$_POST['new_software'];
                  $old_software=$_POST['old_software'];

                  $sql="INSERT INTO pricing(fname,lname,telephone,email,organization,empnumber,requiredsoftware,currentsoftware) VALUES('$fname','$lname','$phone','$email','$organization',$employees,'$old_software','$new_software')";
                  $query=mysqli_query($conn,$sql);
                  if($query){
                    echo"<div class='alert alert-success'>Sent</div>";
                  }
                  else{
                    echo"<div class='alert alert-danger'>failed</div>".mysqli_error($conn);
                  }
                  mysqli_close($conn);
                }
                ?>
                <div class="contact-form-box">
                  <div class="form-selector">
                    <label>First Name</label>
                    <input style="border-radius: 3px" name="fname" type="text" class="form-control input-sm" id="fname" />
                  </div>
                  <div class="form-selector">
                    <label>Last Name</label>
                    <input style="border-radius: 3px" name="lname" type="text" class="form-control input-sm" id="lname" />
                  </div>
                  <div class="form-selector">
                    <label>Phone</label>
                    <input  style="border-radius: 3px" name="phone" type="text" class="form-control input-sm" id="phone" />
                  </div>
                  <div class="form-selector">
                    <label>Email</label>
                    <input style="border-radius: 3px" name="email" type="text" class="form-control input-sm" id="email" />
                  </div>
                  <div class="form-selector">
                    <label>Organization</label>
                    <input style="border-radius: 3px" name="organization" type="text" class="form-control input-sm" id="organization" />
                  </div>
                  <div class="form-selector">
                    <label>Number Of Employees</label>
                    <input style="border-radius: 3px" name="employees" type="text" class="form-control input-sm" id="employees" />
                  </div>
                  <div class="form-selector">
                    <label>Required Software/Service</label>
                    <input style="border-radius: 3px" name="old_software" type="text" class="form-control input-sm" id="old_software" />
                  </div>
                  <div class="form-selector">
                    <label>Current System</label>
                    <textarea name="new_software" class="form-control input-sm" rows="10" id="new_software"></textarea>
                  </div>
                  <div class="form-selector">
                    <button class="button" name="submit" type="submit"><i class="fa fa-send"></i>&nbsp; <span>Send Message</span></button>
                    &nbsp; <a href="#" class="button">Clear</a> </div>
                </div>
                </form>
              </div>
              <div class="col-md-2"></div>
              </div>

            </div>
          </div>
        </section>
      </div>
    </div>
  </section>
  <!-- Main Container End -->
   <!-- our clients Slider -->

<?php include_once("include/footer.php")?>