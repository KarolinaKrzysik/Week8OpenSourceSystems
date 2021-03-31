<?php  

    //connect to the database
    $conn = mysqli_connect("localhost", "21904889", "mysqluser", "db4_21904889");

    //do this if the Select button was clicked
    if($_POST[selweek]){
        $sql = "SELECT * FROM lotto WHERE wk = $_POST[selweek];";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result);
        
        echo "<h1>Numbers drawn in week $row[wk]:</h1></br>";

        echo "Number 1 is $row[number1]<br/>";
        echo "Number 2 is $row[number2]<br/>";
        echo "Number 3 is $row[number3]<br/>";
        echo "Number 4 is $row[number4]<br/>";
        echo "Number 5 is $row[number5]<br/>";
        echo "Number 6 is $row[number6]<br/>";
    }
    //do this when the Select button has not been clicked yet
    else{

    
    $sql = "select * from lotto;";
    $result = mysqli_query($conn, $sql);

    echo "<form action='$_SESSION[PHP_SELF]' method='post' >";
    echo "<br/>Select the lottery week ";
    echo "<select name='selweek' >";
    //display weeks numbers   
    while($row = mysqli_fetch_assoc($result)) {
  	    echo "<option value='$row[wk]'>$row[wk]</option><br/>";
    }
       echo "</select><br/>";
       echo "<input name = 'btnSelect' type='submit' value='Select' />";
       echo "</form>";
    }
?>
