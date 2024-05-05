<?php
include("db.php")
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>students registration form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>      
    <div class="container">
        <h1> new students registration</h1>
        
        <form action="index.php" method="post">
        <label for="fname">First Name: </label>   
        <input type="text" name="fname" id="fname" placeholder="Enter your first name" required>
        <br> <label for="lname">Last Name: </label>   
        <input type="text" name="lname" id="lname" placeholder="Enter your last name" required>
        <br> <label for="age">Age</label>   
        <input type="number" name="age" id="age" placeholder="Enter your age" required>
        <br><label for="gender">Gender:</label>
        <select
                id="gender"
                name="gender"
                required>
                <option value="male">
                    Male
                </option>
                <option value="female">
                    Female
                </option>
                <option value="other">
                    Other
                </option>
                required
            </select>
            <br><label for="mobile">Contact:</label>
                <input
                    type="text"
                    id="mobile"
                    name="mobile"
                    maxlength="10"
                    required/>
            <br><label for="email">Email:</label>
            <input
                    type="text"
                    id="email"
                    name="email"
                    required/>
            <br><label for="course">Course:</label>        
                <select
                id="course"
                name="course"
                required>
                <option value="Btech">
                    Btech
                </option>
                <option value="Mtech">
                    Mtech
                </option>
                <option value="MBA">
                    MBA
                </option>
            </select>   
        <br>   
        <button type="submit">Submit </button>    

        </form>

    </div>
    <script src="index.js"></script>
</body>
</html>





<?php
 $db_server="localhost";
 $db_user="root";
 $db_pass= "";
 $db_name="student";
 $conn="";
 

 try{
     $conn= mysqli_connect($db_server,$db_user, $db_pass, $db_name);

 }
 catch(mysqli_sql_exception){
     echo"not connectedddd";
 }



$fname = $_POST['fname'];
$lname = $_POST['lname'];
$gender = $_POST['gender'];
$age = $_POST['age'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$course = $_POST['course'];

if($_SERVER["REQUEST_METHOD"]=="POST"){
$sql = "INSERT INTO students (fname,lname, age, gender, email, mobile, course) 
VALUES ('$fname','$lname', '$age', '$gender', '$email', '$mobile', '$course')";



mysqli_query($conn, $sql);
    echo "Successfully inserted";}

mysqli_close($conn);


?>
