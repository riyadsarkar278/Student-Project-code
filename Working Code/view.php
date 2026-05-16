<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM students";
$result = $conn->query($sql);

echo "<h1>Registered Students</h1>";
echo "<table border='1' cellpadding='10'>";
echo "<tr><th>ID</th><th>Name</th><th>Email</th><th>Course</th><th>Phone</th><th>Photo</th></tr>";

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$row['id']."</td>";
        echo "<td>".$row['name']."</td>";
        echo "<td>".$row['email']."</td>";
        echo "<td>".$row['course']."</td>";
        echo "<td>".$row['phone']."</td>";
        echo "<td><img src='".$row['photo']."' width='80'></td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='6'>No students registered yet.</td></tr>";
}
echo "</table>";
$conn->close(); 