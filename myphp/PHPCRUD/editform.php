<?php
    include_once 'database.php';
    $userid = $_GET['id'];
    echo "Userid: " . $userid."<br/>";

        $query = "SELECT * FROM employee where userid = '$userid'";
        echo $query."<br/>";
       $result = mysqli_query($conn,$query);
       echo $result->num_rows."<br/>";

        if (mysqli_num_rows($result) > 0) {
?>
            <form method="post" action="updateemployee.php">
                <table border="1">
                    <tr>
                        <th>First Name</th>
                        <td><input type="text" name="firstname" value="<?php echo $row["first_name"]; ?> "></td>
                    </tr>
                    <tr>
                        <th>Lastname</th>  <td><input type="text" name="lastname" value="<?php echo $row["last_name"]; ?> "></td>
                    </tr>
                        
                    <tr>
                    <th>Email</th><td><input type="text" name="email" value="<?php echo $row["email"]; ?> "></td>
                    </tr>    
                    <tr>
                    <th>City</th><td><input type="text" name="city" value="<?php echo $row["city"]; ?> "></td>
                    </tr>    
                    <tr>    
                    <th></th><input type="submit" name="save" value="Update" />
                    </tr>

                </table>
                <input type="hidden" name="userid" value="<?php echo $row["userid"]; ?>" />
            </form>
<?php

    }

?>