<?php
include('connect.php');
include('header.php');
?>
<html>
	<head>
		<title>Profit</title>
	</head>
	<body>

    <div class="container-fluid px-1 py-5" style="margin: auto;">
        <div class="row d-flex justify-content-center">
            <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center insert-form">
                <h3>Profit Month</h3>
                <p class="blue-text">The number indicates the profit clculation of month</p>
                <div class="card">
                    <?php
                    $sql = "SELECT ((SUM(1200-stock.stockbuyp))/ (SUM(stock.stockbuyp))*100) as percentageprofit FROM stock INNER JOIN customer ON (customer.prid = stock.prid) AND (customer.price = 1200);";
			        $query = mysqli_query($con, $sql);
                    if(mysqli_num_rows($query) > 0)
                    {
                        while($row = mysqli_fetch_assoc($query))
                        {?>                                      
                            <td><?php echo "<h4>".$row['percentageprofit']. "%</h4>";}} ?>
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