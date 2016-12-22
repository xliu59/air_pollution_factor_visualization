<html>
    <body>
        <?php
            include 'open.php';
            $password = $_POST["password"];
              // Get the user input.
            $mysqli->multi_query("CALL GetPasswords('".$password."');");      
              // Execute the query with the input.
            $res = $mysqli->store_result();
            if ($res) {
                echo "<table border=\"1px solid black\">";                  		
                  // The procedure executed successfully.
                echo "<tr><th> Password </th></tr>";
                while ($row = $res->fetch_assoc()) {
                    echo "<tr><td>" . $row['Result'] . "</td></tr>";
                    // Print every row of the result.
                }
                echo "</table>";
                $res->free();
                  // Clean-up.
            } else {
                printf("<br>Error: %s\n", $mysqli->error);  
                   // The procedure failed to execute.
            }
            $mysqli->close();                                              
 	      // Clean-up.
        ?>
    </body>
</html>

