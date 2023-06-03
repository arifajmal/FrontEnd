$sql = "SELECT productLine FROM productlines";
$result = $conn->query($sql);
echo"<form>";
    echo"<select name = 'customers' onchange='showCustomer(this.value)'>";
    echo"<option value=">Select a customer:</option>";

    if ($result->num_rows > 0) {
        //output data of each row
        while($row = $result->fetch_assoc()) {
            echo"<option value="".$row["productLine"]."'>".$row["productLine"]."</option>";
        }

        echo"</select></form>";
    } else {
        echo"0 results";
    }
    
$conn->close();