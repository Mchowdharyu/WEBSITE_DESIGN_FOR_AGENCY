<?php
include('connect.php');
include('header.php');
$message = "";
$error = "";
if(isset($_POST['submit']))
{
	$prid = $_POST['prid'];
	$clid = $_POST['clid'];

	$sql = "SELECT prid FROM stock WHERE quantity < 10 AND prid = '$prid'";
	$query = mysqli_query($con, $sql);
	if (mysqli_num_rows($query)== 0) {
			$sql = "SELECT clid FROM customer WHERE price < 1200 AND clid = '$clid'";
            $query = mysqli_query($con, $sql);
            if (mysqli_num_rows($query)== 0) {
                $sql = "UPDATE stock SET quantity = quantity-1 WHERE prid = '$prid'";
                $query = mysqli_query($con, $sql);
                $sql = "SELECT prid FROM stock WHERE quantity < 10 AND prid = '$prid'";
                $query = mysqli_query($con, $sql);
                if (mysqli_num_rows($query)== 0) {
                    $message = "Payment Successful";
                } else {
                    $error = "Payment success, but, <br>the item of ID ".$prid." has less items";
                }
                    
                } else {
                    $error = "Payment failed, Customer ID ".$clid." is in the defaulter's list";
                }
			}
			else
			{
                $error = "Payment failed, Stock ID ".$prid." has less quantity";
			}
}
	
?>
<html>
	<head>
		<title>Payment</title>
	</head>
	<body>

    <div class="container-fluid px-1 py-5" style="margin: auto;">
        <div class="row d-flex justify-content-center">
            <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center insert-form">
                <h3>Pay Here</h3>
                <p class="blue-text">Please fill in the details</p>
                <div class="card">
                    <form class="form-card" action = '#' method="POST">
                        <p style = "font-style: italic; color: green;"><?php echo $message; $message = "";?></p>
                        <h4 style = "font-style: italic; color: red;"><?php echo $error; $error = "";?></h4>

                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Customer ID<span class="text-danger"> *</span></label> <input type="number"  name="clid" placeholder="Enter the Customer ID" required> </div>
                        </div>

                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Stock ID<span class="text-danger"> *</span></label> <input type="number"  name="prid" placeholder="Enter the Item ID" required> </div>
                        </div>

                        <div class="row justify-content-end">
                            <div class="form-group col-sm-6"> <button type="submit" class="btn-block btn-primary" name = "submit">Payment</button> </div>
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