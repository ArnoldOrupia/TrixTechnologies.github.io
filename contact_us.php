<?php include_once("include/dbconnect.php");
include_once("include/header.php");
?>


  <div class="breadcrumbs">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <ul>
            <li class="home"> <a title="Go to Home Page" href="index.php">Home</a><span>&raquo;</span></li>

            <li><strong>Contact Us</strong></li>
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
                  <li><i class="fa fa-home"></i>Nairobi Kenya P.O BOX </li>
                  <li><i class="fa fa-phone"></i><span>+254700442656</span></li>
                  <li><i class="fa fa-fax"></i><span>+254700442656</span></li>
                  <li><i class="fa fa-envelope"></i>Email: <span><a href="mailto:support@justtheme.com">trixtechnologies@gmail.com</a></span></li>
                </ul>
                </br></br>
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
              <form  method="post">
                <h3 class="page-subheading" style="margin-top = 10px">SEND US A QUICK MESSAGE</h3>
                <?php
                if(isset($_POST['submit'])){
                  $fname=$_POST['fname'];
                  $lname=$_POST['lname'];
                  $email=$_POST['email'];
                  $message=$_POST['message'];

                  $sql="INSERT INTO contact(fname,lname,email,message) VALUES('$fname','$lname','$email','$message')";
                  $query=mysqli_query($conn,$sql);{
                  echo "message sent successfully.";
                  }
                 }

                ?>
                <div class="contact-form-box">
                  <div class="form-selector">
                    <label >First Name</label>
                    <input style="border-radius: 3px" name="fname" type="text" class="form-control input-sm" id="name" />
                  </div>
                   <div class="form-selector">
                    <label>Last Name</label>
                    <input style="border-radius: 3px" name="lname" type="text" class="form-control input-sm" id="name" />
                  </div>
                  <div class="form-selector">
                    <label >Email</label>
                    <input required = 'required' style="border-radius: 3px" name="email" type="text" class="form-control input-sm" id="email" />
                  </div>
                  <div class="form-selector">
                    <label>Message</label>
                    <textarea name="message" class="form-control input-sm" rows="10" id="message"></textarea>
                  </div>
                  <div class="form-selector">
                    <button class="button" name="submit" type="submit"><i class="fa fa-send"></i>&nbsp; <span>Send Message</span></button>
                    &nbsp; <a href="#" class="button">Clear</a> </div>
                </div>
                </form>
</div>
<div class="col-md-2">

</div>
              </div>
              <div class="col-sm-2"></div>
            </div>
          </div>
        </section>
      </div>
  </section>
  <!-- Main Container End -->
   <!-- our clients Slider -->
      <?php include_once("include/footer.php")?>