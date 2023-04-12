<?php ob_start();
include('inc/header.php');

include('inc/connection.php');
?>
   <!--main content start-->
    <section id="main-content">



      <section class="wrapper">
        <!--overview start-->
         <div class="row">
          <div class="col-lg-12">


            <section class="panel">

              <div class="panel-body table-responsive" >
                <table id="example" class="display" cellspacing="0" width="100%">
<thead>
            <tr>

                <th>Patient ID</th>

                <th>First Name</th>
<th>LastName</th>
				<th>Mobile</th>
				<th>Address</th>
				<th>Email</th>
				<th>MSP</th>
            </tr>

</thead>

        <tbody>
            <?php
                                      $query=mysqli_query($connect,"select * from ip_patient");
                                      if(mysqli_num_rows($query)>0)
                                      {
                                           while($row=mysqli_fetch_array($query))
                                           {
                                                ?>
                                              <tr>

                                                  <td><?php echo $row['uid']; ?></td>
                                                    <td><?php echo $row['fname']; ?></td>


												  <td><?php echo $row['lname']; ?></td>
                                                      <td><?php echo $row['contact']; ?></td>
                                                  <td><?php echo $row['address']; ?></td>
                                                  <td><?php echo $row['email']; ?></td>
												  <td><?php echo $row['msp']; ?></td>
												  <td>
												   <div class="btn-group">
												   <a class="btn btn-danger white" href="index.php?vid=<?php echo $row['uid'] ?>">Delete</a>
						</div>
						</td>

                                              </tr>

                                                <?php
                                           }
                                      }
                                      ?>
			 </tbody>
    </table>
              </div>
            </section>
          </div>
        </div>

        <!-- statics end -->



      </section>

    </section>
    <!--main content end-->
  </section>
  <!-- container section start -->

  <!-- javascripts -->
  <script src="js/jquery.js"></script>
  <script src="js/jquery-ui-1.10.4.min.js"></script>
  <script src="js/jquery-1.8.3.min.js"></script>
  <script type="text/javascript" src="js/jquery-ui-1.9.2.custom.min.js"></script>
  <!-- bootstrap -->
  <script src="js/bootstrap.min.js"></script>
  <!-- nice scroll -->
  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
  <!-- charts scripts -->
  <script src="assets/jquery-knob/js/jquery.knob.js"></script>
  <script src="js/jquery.sparkline.js" type="text/javascript"></script>
  <script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
  <script src="js/owl.carousel.js"></script>
  <!-- jQuery full calendar -->
  <script src="js/fullcalendar.min.js"></script>
    <!-- Full Google Calendar - Calendar -->
    <script src="assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
    <!--script for this page only-->
    <script src="js/calendar-custom.js"></script>
    <script src="js/jquery.rateit.min.js"></script>
    <!-- custom select -->
    <script src="js/jquery.customSelect.min.js"></script>
    <script src="assets/chart-master/Chart.js"></script>

    <!--custome script for all page-->
    <script src="js/scripts.js"></script>
    <!-- custom script for this page-->
    <script src="js/sparkline-chart.js"></script>
    <script src="js/easy-pie-chart.js"></script>
    <script src="js/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="js/jquery-jvectormap-world-mill-en.js"></script>
    <script src="js/xcharts.min.js"></script>
    <script src="js/jquery.autosize.min.js"></script>
    <script src="js/jquery.placeholder.min.js"></script>
    <script src="js/gdp-data.js"></script>
    <script src="js/morris.min.js"></script>
    <script src="js/sparklines.js"></script>
    <script src="js/charts.js"></script>
    <script src="js/jquery.slimscroll.min.js"></script>




	<script type="text/javascript" src="js/jquery.validate.min.js"></script>

  <!-- custom form validation script for this page-->
  <script src="js/form-validation-script.js"></script>



</body>

</html>

