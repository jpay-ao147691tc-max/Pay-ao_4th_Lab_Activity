<?php

$fullname = $_POST['fullname'];
$age = $_POST['age'];
$course = $_POST['course'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$bio = $_POST['bio'];

$hobbies = "";
if(isset($_POST['hobbies'])){
    $hobbies = implode(", ", $_POST['hobbies']);
}



?>

<!DOCTYPE html>
<html>
<head>
<title>User Profile</title>

<style>

body{
    font-family: Arial;
    background-color: #967777;
    margin: 0;
    padding: 0;
}

.container{
    width: 450px;
    margin: 60px auto;
    background: white;
    padding: 25px;
    border-radius: 10px;
}

h1{
    text-align: center;
    color: #aa8686;
}

.info{
    font-size: 16px;
    line-height: 1.8;
}

.info b{
    color: #c5cac5;
}

</style>

</head>

<body>

<div class="container">

<h1>User Profile</h1>

<img src="<?php echo $targetFile; ?>" class="profile-img">

<div class="info">
<b>Name:</b> <?php echo $fullname; ?> <br>
<b>Age:</b> <?php echo $age; ?> <br>
<b>Course:</b> <?php echo $course; ?> <br>
<b>Email:</b> <?php echo $email; ?> <br>
<b>Gender:</b> <?php echo $gender; ?> <br>
<b>Hobbies:</b> <?php echo $hobbies; ?> <br>
<b>Biography:</b> <?php echo $bio; ?> <br>
</div>

</div>

</body>
</html>