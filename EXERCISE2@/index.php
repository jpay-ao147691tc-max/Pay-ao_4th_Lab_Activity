<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Profile Form</title>

<style>
        body{
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: grey;
        }
fieldset {
  display:flex;
  flex-direction:column;
  align-items:center;
  width:50%;
  margin:20px auto;
  background-color:wheat;
}

.details{
  width:200px;
}
</style>

</head>

<body>

<fieldset>
<h1>Profile Form Page</h1>
<form action="profile.php" method="POST" enctype="multipart/form-data">
<div class="details">
<label>Full Name</label>
<input type="text" name="fullname" required><br><br>
<label>Age</label>
<input type="number" name="age" required><br><br>
<label>Course</label>
<input type="text" name="course" required><br><br>
<label>Email</label>
<input type="email" name="email" required><br><br>
</div>
<p>Gender</p>
<input type="radio" name="gender" value="Male" required> Male
<input type="radio" name="gender" value="Female"> Female
<br><br>
<p>Hobbies</p>
<input type="checkbox" name="hobbies[]" value="sabong"> Online Games
<input type="checkbox" name="hobbies[]" value="onlinesugal"> Basketball
<input type="checkbox" name="hobbies[]" value="Traveling"> Watching Movies
<input type="checkbox" name="hobbies[]" value="Sleeping"> Volleyball
<br><br>
<label>Short Biography</label><br>
<textarea name="bio" rows="4" cols="40"></textarea>
<br><br>
<label>Upload Profile Image</label>
<input type="file" name="image" accept="image/*" required>
<br><br>
<input type="submit" value="Submit">
</form>
</fieldset>
</body>
</html>