<?php
include('connect.php');
include('header.php');
?>
<html>
	<head>
		<title>Less Quanity Stock</title>
	</head>
	<body>

    <div class="container-fluid px-1 py-5" style="margin: auto;">
        <div class="row d-flex justify-content-center">
            <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center insert-form">
                <h3>Less quantity stock Records</h3>
                <p class="blue-text">Below are the stock with less quantity <br> less than 10 items</p>
                <div class="card">
                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Quantity</th>
                                    
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $sql = "SELECT * FROM stock where quantity<10";
			                        $query = mysqli_query($con, $sql);

                                    if(mysqli_num_rows($query) > 0)
                                    {
                                    while($row = mysqli_fetch_assoc($query))
                                    {               ?>                                      
                                        <tr class="even gradeY">
                                            <td><?php echo $row['prid'];?></td>
                                            <td><?php echo $row['name'];?></td>
                                            <td><?php echo $row['quantity'];?></td>
                                            
                                        </tr>
                                    <?php }} ?>                                      
                                    </tbody>
                                </table>
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