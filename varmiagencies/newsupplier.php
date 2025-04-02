<?php
include('connect.php');
include('header.php');
$message = "";
$error = "";
if(isset($_POST['submit']))
{
			$supid = $_POST['supid'];

			$sql = "SELECT supid FROM supplier WHERE supid = '$supid'";
			$query = mysqli_query($con, $sql);
			if (mysqli_num_rows($query)== 0) {
				$name=$_POST['name'];
                $address = $_POST['address'];
                $prid = $_POST['prid'];
                // $supplierSN = $_POST['supplierSN'];
                
                $sql = "INSERT INTO `supplier` VALUES('$supid','$name','$address','$prid')";
                $query = mysqli_query($con, $sql);
                $message = "Supplier Added Successfully";
			}
			else
			{
                $error = "Supplier ID already Exists";
			}
		}
	
?>
<html>
	<head>
		<title>New Supplier</title>
	</head>
	<body>

    <div class="container-fluid px-1 py-5" style="margin: auto;">
        <div class="row d-flex justify-content-center">
            <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center insert-form">
                <h3>Insert New supplier</h3>
                <p class="blue-text">Please fill in the details</p>
                <div class="card">
                    <form class="form-card" action = '#' method="POST">
                        <p style = "font-style: italic; color: green;"><?php echo $message; $message = "";?></p>
                        <p style = "font-style: italic; color: red;"><?php echo $error; $error = "";?></p>
                        
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">ID<span class="text-danger"> *</span></label> <input type="number"  name="supid" placeholder="Enter the supplier ID" required> </div>
                            <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Name<span class="text-danger"> *</span></label> <input type="text" name="name" placeholder="Enter supplier Name" required> </div>
                        </div>
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Address<span class="text-danger"> *</span></label> <input type="text"  name="address" placeholder="Address" required> </div>
                            <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Stock ID<span class="text-danger"> *</span></label> <input type="number" name="prid" placeholder="Stock ID" required> </div>
                        </div>

                        <div class="row justify-content-end">
                            <div class="form-group col-sm-6"> <button type="submit" class="btn-block btn-primary" name = "submit">New suplier</button> </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php include('footer.php')?>
    
        <script src="tools/js/jquery-1.10.2.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!-- BOOTSTRAP SCRIPTS  -->
        <script src="tools/js/bootstrap.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
	</body>
	
	
</html>