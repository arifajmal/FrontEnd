$parameter = $_GET['q'];
&sql = "SELECT * FROM products where productLine = '".$parameter."'";
$result = $conn->query($sql);
echo "<table>";

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["productCode"]."</td><td>".$row["productName"].
            "</td><td>".$row["productScale"]."</td><td>".$row["productVendor"].
            "</td><td>".$row["productDescription"]."</td><td>".$row["quantityInStock"].
            "</td><td>".$row["buyPrice"]."</td><tr>";
    }

    echo"</table>";
} else {
    echo "0 results";
}