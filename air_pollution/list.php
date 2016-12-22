<html> 
    <body>
        <?php
            //get post parameters
            include 'open.php';
            $password = $_POST["password"];
            $mysqli->multi_query("CALL AllRawScores('".$password."');");
            $res = $mysqli->store_result();
            //read 1st line
            $row = $res->fetch_assoc();
            if ($row['RESULT']){
                echo $row['RESULT'];
            }else {
                //table header 
                echo "<table border=\"1px solid black\">";
                echo "<tr><th> SSN </th><th> LName </th><th> FName </th><th> Section </th><th> HW1 </th><th> HW2a </th><th> HW2b </th><th> Midterm </th><th> HW3 </th><th> FExam </th></tr>";
                //print 1st line
                echo "<tr><td>" . $row['SSN'] . "</td><td>" . $row['LName'] . "</td><td>" . $row['FName'] . "</td><td>" . $row['Section'] . "</td><td>" . $row['HW1'] . "</td><td>" . $row['HW2a'] . "</td><td>" . $row['HW2b'] . "</td><td>" . $row['Midterm'] . "</td><td>" . $row['HW3'] . "</td><td>" . $row['FExam'] . "</td></tr>";
                //print 2+ line
                while ($row = $res->fetch_assoc()) {
                    echo "<tr><td>" . $row['SSN'] . "</td><td>" . $row['LName'] . "</td><td>" . $row['FName'] . "</td><td>" . $row['Section'] . "</td><td>" . $row['HW1'] . "</td><td>" . $row['HW2a'] . "</td><td>" . $row['HW2b'] . "</td><td>" . $row['Midterm'] . "</td><td>" . $row['HW3'] . "</td><td>" . $row['FExam'] . "</td></tr>";
                }
                echo "</table>";
                $res->free();
            }
            $mysqli->close(); 
        ?>
    </body> 
</html> 
