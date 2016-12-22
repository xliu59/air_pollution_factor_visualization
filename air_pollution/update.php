<?php
    include 'open.php';
    $password = $_POST["pwd"];
    $ssn = $_POST["ssn"];

    if(is_numeric($_POST["newScore"])){
        $newScore = floatval($_POST["newScore"]);
    }else {
        echo "Incorrect score format! Must be numeric!<br>";
        $newScore = "";
    }
    
    //Execute query with input params
    $query = "CALL UpdateMidterm('" . $password . "', '" . $ssn . "', " . $newScore . ");";
    //echo $query."<br>";
    $mysqli->multi_query($query);

    //fetch result
    $res = $mysqli->store_result();
    if($res){
        //print out the error result
        echo "<table border = '1px solid black'>";
        while($row = $res->fetch_assoc()) {
            echo "<tr><td>".$row['RESULT']."</td></tr>";
        }
        echo "</table>";
        $res->free();
    }else if ($mysqli->error){
        //execution failed
        printf("<br>Error: %s\n", $mysqli->error);
    }else{
        //no error msg, execution success
        echo "EXECUTION SUCCESS!";
    }
    $mysqli->close();
?>
