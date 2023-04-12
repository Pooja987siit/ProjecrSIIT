<?php require_once 'inc/header.php';
require_once 'inc/connection.php'; ?>

	<div class="map-w3ls" style="width:100%; float:center; margin-top:100px;">
				 <div class="three_title_agile">
				     <h3 style="margin-bottom:0px !important;"> Add <span>Information</span>  </h3>
				</div>
						 <p class="sub_para">It’s time to connect with doctor</p>
		<div class="col-md-12" id="Login" style="margin:10 auto;" style="width:100%; float:center; margin-top:100px;">
<?php
 if(isset($_POST['submit']))
    {
      $uid=$_POST['uid'];

      $fname=$_POST['fname'];
      $lname=$_POST['lname'];
      $email=$_POST['email'];
      $mobile=$_POST['contact'];
      $address=$_POST['add'];
      $msp=$_POST['msp'];
        $fromEmail="jyot.123preet@gmail.com";
            $message="Hello, We wanted to remind you of your appointment on [DATE] at
            [TIME] with [PROVIDER]. Your health is important to us, so we'd like to remind you of
            a few things to make your visit go smoothly. Remember to show up 15 minutes early.
            Remember to bring MSP.";
            $subjectName="Appointment Confirmnation";


  $query=mysqli_query($connect,"insert into ip_patient(uid,fname,lname,contact,address,email,msp) values('$uid','$fname','$lname','$mobile','$address','$email','$msp')");
     if(mysqli_affected_rows($connect))
                                        {
                                            echo '<div class="alert alert-success">Appointment Confirmed.</div>';
                                        }
                                        else
                                        {
                                            echo '<div class="alert alert-danger">Error Occured.</div>';
                                        }



     $to = $email;
         $subject = $subjectName;
         $headers = "MIME-Version: 1.0" . "\r\n";
         $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
         $headers .= 'From: '.$fromEmail.'<'.$fromEmail.'>' . "\r\n".'Reply-To: '.$fromEmail."\r\n" . 'X-Mailer: PHP/' . phpversion();
         $message = '<!doctype html>
     			<html lang="en">
     			<head>
     				<meta charset="UTF-8">
     				<meta name="viewport"
     					  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
     				<meta http-equiv="X-UA-Compatible" content="ie=edge">
     				<title>Document</title>
     			</head>
     			<body>
     			<span class="preheader" style="color: transparent; display: none; height: 0; max-height: 0; max-width: 0; opacity: 0; overflow: hidden; mso-hide: all; visibility: hidden; width: 0;">'.$message.'</span>
     				<div class="container">
                      '.$message.'<br/>
                         Regards<br/>
                       '.$fromEmail.'
     				</div>
     			</body>
     			</html>';
         $result = @mail($to, $subject, $message, $headers);

         echo '<script>alert("Email sent successfully !")</script>';



    }
?>
	<?php
     if(isset($_SESSION['client_id']))
                              {

                              $query = "SELECT * FROM ip_user where id='".$_SESSION['client_id']."'";

                              $result = mysqli_query($connect, $query) or die(mysqli_error($db));


                              while ($row = mysqli_fetch_array($result)) {



                                 ?>

		<div class="contact-middle1" style="float:none;width:100%; margin:0 auto;">

					    <div class="login well well-small" style="max-width: 550px; !important">
        <div class="center">
          <i class="fa fa-users"></i>
        </div>
		  <form  method="POST" action="#" class="needs-validation" novalidate >
                <div class="row">
        		<div class="col-md-12 mb-3">
                    <label for="firstName">User ID</label>
                    <input type="text" class="form-control" name="uid" value="<?php echo $row['id'];?>" id="firstName" placeholder="" value="" readonly required>
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="firstName">First name</label>
                    <input type="text" class="form-control" name="fname" value="<?php echo $row['fname'];?>" id="firstName" placeholder="" value="" required>
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="lastName">Last name</label>
                    <input type="text" class="form-control" name="lname"  id="lastName" value="<?php echo $row['lname'];?>" placeholder="" value="" required>
                  </div>
                </div>
                <div class="mb-3">
                  <label for="email">Email <span class="text-muted"></span></label>
                  <input type="email"  name="email" class="form-control" id="email" value="<?php echo $row['email'];?>"placeholder="you@example.com">

                </div>

        		<div class="mb-3">
                  <label for="email">Contact No <span class="text-muted"></span></label>
                  <input type="text" name="contact"  class="form-control" value="<?php echo $row['mobile'];?>"id="contactno" placeholder="5665645">

                </div>
                <div class="mb-3">
                  <label for="address">Address</label>
                  <input type="text" name="add"  class="form-control" id="address" value="<?php echo $row['address'];?>" placeholder="1234 Main St" required>
                </div>


 <div class="mb-3">
                  <label for="address">MSP</label>
                  <input type="text" name="msp"  class="form-control" id="msp" value="" placeholder=" Enter MSP" required>
                </div>


                <hr class="mb-4">


              <button class="btn btn-primary btn-lg btn-block" type="submit" name="submit" >Confirm Appointment</button>


              </form>

       </div><!--/.login-->	</div>

						  <?php }
						  }?>

		</div>
		</div>
				</div>
<!-- //contact -->
<?php require_once 'inc/footer.php'; ?>