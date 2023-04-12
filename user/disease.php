<?php ob_start();
include('inc/header.php');
include('inc/connection.php');
?>
<main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Diagnose</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Diagnose</li>
          </ol>
        </div>
      </div>
    </section><!-- End Breadcrumbs Section -->

    <section class="inner-page">
      <div class="container">
		<div class="container">
  <div class="py-5 text-center">
    
    <h2>Disease Details </h2>
    <?php
    
    if(isset($_POST['submit']))
    {
      $uid=$_POST['uid'];
                            
      $fname=$_POST['fname'];
      $lname=$_POST['lname'];
      $email=$_POST['email'];
      $mobile=$_POST['contact'];
      $address=$_POST['add'];
      $img=$_POST['img'];


      if(substr($img, 0, 4) == 'Acne')
       {
  ?>
  <div>
  <h3 style="color:red"> Non-Chronic <h3>
  
  <a href="rproducts.php"><p style="color:grey;font_size:50px"> Click here to view Products <p><a>
</div>
<?php
 }

  else{


                          

                        ?>
                        <div>
  <h3 style="color:red"> Chronic <h3>
  
  <a href="rproducts.php"><p style="color:grey;font_size:50px"> This is the Recommended Doctor List <p><a>
</div>

 <section class="panel">

              <div class="panel-body table-responsive">
         <table id="example" class="display" cellspacing="0" width="100%" >

         <tbody >

             <?php
                                       $query=mysqli_query($connect,"select * from ip_doctor ORDER BY uid desc");
                                       if(mysqli_num_rows($query)>0)
                                       {
                                            while($row=mysqli_fetch_array($query))
                                            {
                                                 ?>
                                               <tr >


                                              <td><?php echo $row['fullname']; ?></a></td>
                                               <td><a href="connectdoctor.php"> Click here</a></td>

                                               </tr>

                                                 <?php
                                            }
                                       }
                                       ?>
 			 </tbody>
     </table>
     </div>
     </section>

                        <?php
  }
                      }  
                             ?>
 
 

               </div>
    
  </div>

    </div>
  </div>
</div>
	  
	  
       
      </div>
    </section>

  </main><!-- End #main -->
 <?php 
include('inc/footer.php');
?>