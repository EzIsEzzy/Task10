<?php include "./header.php"; include './connection.php'; include "./add_student_back.php";

?>
        <div>
            <table border="1">
                <thead>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Phone No</th>
                <th>Image</th>
                <th colspan="2">Options</th>
                </thead>
                <tbody>
                <?php
                if(mysqli_num_rows($querySELECT) > 0)
                {
                    while($row = mysqli_fetch_assoc($querySELECT))
                    {
                        $value = "<tr>";
                        $value .= "<td>". $row['std_id']."</td>";
                        $value .= "<td>". $row['std_firstName']."</td>";
                        $value .= "<td>". $row['std_lastName']."</td>";
                        $value .= "<td>". $row['std_phoneNo']."</td>";
                        $value .= "<td>"."<img src='".$row['std_image']."' width='50px' height='50px'> </td><td><a href='update_student.php?id=".$row['std_id']."'>Update</a></td>
                        <td><a href='delete_student_back.php?id=".$row['std_id']."''>Delete</a></td> </tr>";
                        
                        echo $value;
                    }
                }
                else
                {
                    $value = "<tr>";
                    $value .= "<td colspan='6'>No Data Found</td>";
                    $value .= "</tr>";
                    echo $value;
                }
                ?>
                
                </tbody>
            </table>
        </div>
<?php include './footer.php' ?>