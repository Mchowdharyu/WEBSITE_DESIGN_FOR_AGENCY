<?php
include('connect.php');
include('header.php');
	
?>
<html>
	<head>
		<title>Show Supplier</title>
	</head>
	<body>

    <div class="container-fluid px-1 py-5" style="margin: auto;">
        <div class="row d-flex justify-content-center">
            <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center insert-form">
                <h3>Supplier Records</h3>
                <p class="blue-text">Below are the supplier Records</p>
                <div class="card">
                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Address</th>
                                            <th>Stock ID</th>
                                    
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $sql = "SELECT * FROM supplier ";
			                        $query = mysqli_query($con, $sql);

                                    if(mysqli_num_rows($query) > 0)
                                    {
                                    while($row = mysqli_fetch_assoc($query))
                                    {               ?>                                      
                                        <tr class="even gradeY">
                                            <td><?php echo $row['supid'];?></td>
                                            <td><?php echo $row['name'];?></td>
                                            <td><?php echo $row['address'];?></td>
                                            <td><?php echo $row['prid'];?></td>
                                            
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