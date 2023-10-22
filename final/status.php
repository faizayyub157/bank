<?php
session_start();
include('config/dbcon.php');
?>                
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
  <body>
  <div class="container mt-3">
  <h2>Bordered Table</h2>
  <p>The .table-bordered class adds borders on all sides of the table and the cells:</p>            
  <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Account No.</th>
                                    <th>Name</th>
                                    <th>Address</th>
                                    <th>Email</th>
                                    <th>Card</th>
                                    <th>time</th>
                                    <th>Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <?php
                                       $query="SELECT * FROM `card` where name='Faiz ayyub'";
                                       $query_run = mysqli_query($con, $query); 
                                        
                                            foreach($query_run as $row){
                                               // echo $row['name'];
                                               ?> <tr>
                                                <td><?php echo $row['account'];?></td>
                                               <td><?php echo $row['name'];?></td>
                                               <td><?php echo $row['address'];?></td>
                                               <td><?php echo $row['email'];?></td>
                                               <td><?php echo $row['card'];?></td>
                                               <td><?php echo $row['time'];?></td>
                                               <td><?php echo $row['status'];?></td>

                                           </tr>


<?php
                                            }
                        
            
                                    ?>
                            </thead>
                        </table>
                    </div>
                </div>
      </div>