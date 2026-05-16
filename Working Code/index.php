
<?php
session_start();

if(!isset($_SESSION['user'])){
    header("Location: login.html");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Registration</title>
</head>
<body>

<h2>Student Registration Form</h2>

<a href="logout.php">Logout</a>

<br><br>

<form action="save.php" method="POST" enctype="multipart/form-data">

    Name:
    <input type="text" name="name" required>
    <br><br>

    Email:
    <input type="email" name="email" required>
    <br><br>

    Course:
    <input type="text" name="course" required>
    <br><br>

    Phone:
    <input type="text" name="phone" required>
    <br><br>

    Photo:
    <input type="file" name="photo">
    <br><br>

    <button type="submit">Register Student</button>

</form>

<br>

<a href="view.php">View All Students</a>

</body>
</html>
```
