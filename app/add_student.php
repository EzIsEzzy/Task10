<?php include "./header.php"; include './connection.php'?>
        <div>
            <form action="add_student_back.php" method="post" enctype="multipart/form-data">
                <input type="text" name="firstName" placeholder="Enter First Name">
                <input type="text" name="lastName" placeholder="Enter Last Name">
                <input type="text" name="phoneNo" placeholder="Enter Phone No">
                <input type="file" name="image">
                <input type="submit" name="add_student">
            </form>
        </div>
<?php include './footer.php' ?>