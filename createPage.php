<?php
session_start();

$conn = new mysqli( 'localhost','root','','nsu_bus');
if(!$conn){
    echo 'not connect';
}


if ( isset($_POST["submit"]) ){

//require_once('connect.php');
$email=$_POST['email'];
$id=$_POST['id'];
$name=$_POST['name'];
$number=$_POST['number'];
$address=$_POST['address'];
$password=$_POST['password'];

$query1 = "INSERT INTO userinf(user_id,
                                name,
                                phone_num ,
                                email,
                                HOME_adrs,
                                passWord)
    VALUES (
        '$id',
        '$name',
        '$number',
        '$email',
        '$address',
        '$password'

    )";

    if( $conn->query($query1) == TRUE){
       echo 'data  inserted';
    }else{
        echo 'data not inserted';
    }

}

?>



<!DOCTYPE html>
<html>
<style>

Body {
  background-image: url('signup_pic.jpg');
  background-size: 1550px 900px;
}
* {box-sizing: border-box}

/* Full-width input fields */
  input[type=text], input[type=password] {
  width: 100%;
  padding: 10px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #1B4F72;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
  background-color: #1B4F72;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}


.container {
  padding: 20px;
}
</style>
<body>

  <form action="" method="POST">
  <div class="container">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p></center>
    <hr>


            <label for="email"><b>Email</b></label>

            <input type="text" placeholder="Enter NSU Email" name="email" required>

            <label for="id"><b>ID</b></label>
            <input type="text" placeholder="Enter NSU Id" name="id" required>

             <label>
            <input type="checkbox"  name="teacher or student" style="margin-bottom:15px"> Faculty Member
            <input type="checkbox"  name="teacher or student" style="margin-bottom:15px"> Student
            </label><br>

            <label for="name"><b>Name</b></label>
            <input type="text" placeholder="Enter your name" name="name" required>

            <label for="number"><b>Contact Number</b></label>
            <input type="text" placeholder="Enter your phone number " name="number" required>
             <label>
            <label for="address"><b>Select your Address</b></label>
             <select name="address" id="adress",name="address">
                     <option value="Mirpur">Mirpur</option>
                    <option value="Gulshan">Gulshan</option>
                    <option value="Jatrabari">Jatrabari</option>
                    <option value="Narayangonj">Narayangonj</option>
             </select>
            <br>

            </label>
            <br>
             <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" required>


    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Re-enter your given Password" name="psw-repeat" required>

    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>

    <p><span style="color:Blue ">By creating an account you agree to our </span> <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

    <div class="mt-1 pb-2">
								<button name="submit" class="btn btn-success">Sign In</button>
							</div>

                            <div class="mt-1 pb-2">
								Alrady have an account? <a href="login.php" class="text-decoration-none">Login</a>
							</div>
</center>
</form>
  </div>


</body>



</html>
