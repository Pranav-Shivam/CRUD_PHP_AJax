<?php 
require 'dbcon.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Student-Edit</title>
  </head>
  <body>
  <div class="container mt-5">
    
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>
                            Student View Details 
                        </h4>
                        <a href="index.php" class="btn btn-danger float-end">Back</a>
                    </div>
                    <div class="card-body">
                        <?php
                        if(isset($_GET['id']))
                        {
                            $sid=mysqli_real_escape_string($con,$_GET['id']);
                            $query="SELECT * FROM student1 WHERE id='$sid' ";  
                            $query_run=mysqli_query($con,$query);
                            if(mysqli_num_rows($query_run)>0)
                            {
                                $student=mysqli_fetch_array($query_run);
                                //print_r($student);
                                ?>
                               
                                    
                                    <div class="mb-3">
                                        <label >Student Name</label>
                                        
                                        <p class="form-control">
                                            <?= $student['name']; ?>
                                        </p>
                                    </div>

                                    <div class="mb-3">
                                        <label >Student Email</label>
                                        <p class="form-control">
                                                <?= $student['email']; ?>
                                        </p>
                                    </div>

                                    <div class="mb-3">
                                        <label >Student Phone</label>
                                        <p class="form-control">
                                                <?= $student['phone']; ?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label >Student Course</label>
                                        <p class="form-control">
                                                <?= $student['course']; ?>
                                        </p>
                                    </div>

                                   

                                <?php
                            }
                            else
                            {
                                echo "<H5>No Record Found</H5>";
                            }
                        }
                        ?>
                        
                    </div>
                </div>
            </div>
        </div>




    </div>



   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
  </body>
</html>