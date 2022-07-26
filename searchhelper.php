<?php
    session_start();
    include ("dbcon.php");
    if (isset($_POST['input'])) 
    {
        $input=$_POST['input'];
        //echo $input;
        $query="SELECT * FROM `customer_inf` WHERE email LIKE '{$input}%'";
        $result=mysqli_query($con,$query);
        if(mysqli_num_rows($result)>0)
        {
            ?>
            <table class="table table-bordered table-striped mt-4">
                <thead>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Balance</th>
                </thead>
                <tbody>
                    <?php 
                    while($row=mysqli_fetch_assoc($result))
                    {
                        $id=$row['id'];
                        $name=$row['cname'];
                        $add=$row['phNo'];
                        $phn=$row['address'];
                        $bal=$row['balance'];
                        ?>
                        <tr>
                            <td><?php echo $id; ?></td>
                            <td><?php echo $name; ?></td>
                            <td><?php echo $add; ?></td>
                            <td><?php echo $phn; ?></td>
                            <td><?php echo $bal; ?></td>
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>
            <?php
        }
        else
        {
            echo("No data found");
        }
    }
?>