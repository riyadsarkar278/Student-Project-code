
<?php
$servername = "localhost";
$username = "root";   
$password = "";       
$dbname = "student_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name   = $_POST['name'];
$email  = $_POST['email'];
$course = $_POST['course'];
$phone  = $_POST['phone'];

$photo = "";
if (!empty($_FILES['photo']['name'])) {
    $target_dir = "uploads/";
    if (!is_dir($target_dir)) {
        mkdir($target_dir, 0777, true); 
    }
    $photo = $target_dir . basename($_FILES["photo"]["name"]);
    move_uploaded_file($_FILES["photo"]["tmp_name"], $photo);
}

$sql = "INSERT INTO students (name, email, course, phone, photo) 
        VALUES ('$name', '$email', '$course', '$phone', '$photo')";

if ($conn->query($sql) === TRUE) {
    echo "New student registered successfully!";
    echo "<br><a href='view.php'>View All Students</a>";
    echo "<br><a href='index.html'>Go Back</a>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

