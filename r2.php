<!DOCTYPE html>

    
    
<html>
    
     <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap-4.4.1-dist/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="bootstrap-4.4.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="r1.css">
      

    <title>Uptimux Datalogix </title>
     <link rel="icon" type="image/ico" href="b1.png">     
  
</head>
    
  <body>
      <?php 
      $t1=10;
      $t2=20;
      $t3=30;
      $t4=40;
      
      


      
      ?>

    <div class=" headt">
        
            <h3>Uptimus Datalogix Billing System</h3> 
        
    </div>
      
     <div class="container">
     <div class="headi"><h3>Please Enter Deails</h3></div>
        <form action="r2.php" method="GET">
       <div class="row">
       

         <div class="col-sm-5">
            <div class="row">
                <div class="col-sm-3">
                    <label>Name:</label>
                </div>
                <div class="col">
                    <input type="text" name="name" class="form-control" placeholder="First name" required>

                </div>
            </div>
        </br>
            <div class="row">
                <div class="col-sm-3">
                    <label>Age:</label>
                </div>
                <div class="col">
                    <input type="number" name="age" class="form-control" placeholder="Age">

                </div>
            </div>
        </br>
            <div class="row">
                <div class="col-sm-3">
                    <label>PhoneNumber:</label>
                </div>
                <div class="col">
                    <input type="text" name="number" class="form-control" placeholder="PhoneNumber">

                </div>
            </div>

        </br>
        <div class="row">
                <div class="col-sm-3">
                    <label>City:</label>
                </div>
                <div class="col">
                    <input type="text" name="city" class="form-control" placeholder="City">

                </div>
            </div>
                 

                 
             
                    

             

         </div>
         <div class="col-sm-2">
           
         </div>
         <div class="col-sm-5">

            <div class="row">
                <div class="col-sm-3">
                    <label>Item1-10$:</label>
                </div>
                <div class="col">
                    <input type="number" name="i1" class="form-control" placeholder="no of item">

                </div>
            </div>
        </br>
        <div class="row">
                <div class="col-sm-3">
                    <label>Item2-20$:</label>
                </div>
                <div class="col">
                    <input type="number" name="i2" class="form-control" placeholder="no of item">

                </div>
            </div>
        </br>
        <div class="row">
            <div class="col-sm-3">
                <label>Item3-30$:</label>
            </div>
            <div class="col">
                <input type="number" name="i3" class="form-control" placeholder="no of item">

            </div>
        </div>
    </br>
    <div class="row">
        <div class="col-sm-3">
            <label>Item4-40$</label>
        </div>
        <div class="col">
            <input type="number" name="i4" class="form-control" placeholder="no of item">

        </div>
    </div>
    </br>
                
         </div>
         
       </div>
       <div class="row">
           <div class="col-sm-6 "><div class="btn">
               <input class="btn btn-outline-danger" type="reset" value="Reset">
           </div></div>
           <div class="col-sm-6 btn"><div class="btn">
               <input class="btn btn-outline-success" type="submit" value="Submit">
           </div></div>
       </div>
       </form>
       <?php 
       
       $intrst=0.18;
       $subt=0; 
       $subt = ($t1*$_GET["i1"])+($t2*$_GET["i2"])+($t3*$_GET["i3"])+($t4*$_GET["i4"]) ;
       $total = $subt * $intrst +  $subt;
       ?>


       <form action="r3.php" method="POST">
       <div class="row">
           
           <div class="col"></div>


           <div class="col-sm-6">
              <h4 class="head"> Total Billing: </h4>

              <div class="row">
                <div class="col-sm-3">
                    <label>Sub Total:</label>
                </div>
                <div class="col">
                    <input type="number" name="sub" class="form-control" placeholder="<?php echo $subt ?>" readonly>
    
                </div>
            </div>
        </br>
              <div class="row">
                <div class="col-sm-3">
                    <label>Interest</label>
                </div>
                <div class="col">
                    <input type="number" name="intrst" class="form-control" placeholder="18%" readonly>
                        
                </div>
            </div>
        </br>    
            <div class="row">
                <div class="col-sm-3">
                    <label>Total</label>
                </div>
                <div class="col">
                    <input type="number" name="total" class="form-control" placeholder="<?php echo $total ?>" readonly>
    
                </div>
            </div>
            <input type="submit" class="btn btn-outline-secondary" value="Print Receipt">
           </br>

           </div>


           <div class="col"></div>
        
       </div>
    </form>
     
        
    

     </div>
    
    
    
    
    
  </body>  
    
    
    
    

    
    
    
    
    
    
</html>