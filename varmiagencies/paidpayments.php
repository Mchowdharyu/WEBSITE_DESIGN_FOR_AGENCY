<?php
include('connect.php');
include('header.php');
?>
<html>
	<head>
		<title>Paid Payments</title>
	</head>
	<body>

    <div class="container-fluid px-1 py-5" style="margin: auto;">
        <div class="row d-flex justify-content-center">
            <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center insert-form">
                <h3>Paid Payments</h3>
                <p class="blue-text">Below are the List of payments paid Records</p>
                <div class="card">
                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Stock ID</th>
                                            <th>Payment Item</th>
                                            <th>Price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $sql = "SELECT stock.prid, stock.name, customer.price FROM stock INNER JOIN customer ON (stock.prid=customer.prid) AND (customer.price = 1200)";
			                        $query = mysqli_query($con, $sql);

                                    if(mysqli_num_rows($query) > 0)
                                    {
                                    while($row = mysqli_fetch_assoc($query))
                                    {               ?>                                      
                                        <tr class="even gradeY">
                                            <td><?php echo $row['prid'];?></td>
                                            <td><?php echo $row['name'];?></td>
                                            <td><?php echo $row['price'];?></td>
                                            
                                        </tr>
                                    <?php }} ?>                                      
                                    </tbody>
                                </table>
                </div>
            </div>
        </div>
    </div>
        <script src="tools/js/jquery-1.10.2.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!-- BOOTSTRAP SCRIPTS  -->
        <script src="tools/js/bootstrap.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
	</body>
	
	
</html>