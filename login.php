<?php
	session_start();


	$conn = new mysqli('localhost','root','','nsu_bus');

	$unsuccessfulmsg = '';

	if(isset($_POST["submit"])){
		$users_email 			= $_POST['email'];
		$users_password 		= $_POST['password'];
		//$passwordmd5 	= md5($users_password);

		if(empty($users_email)){
			$emailmsg = 'Enter an email.';
		}else{
			$emailmsg = '';
		}

		if(empty($users_password)){
			$passmsg = 'Enter your password.';
		}else{
			$passmsg = '';
		}

		if(!empty($users_email) && !empty($users_password)){
			$sql = "SELECT * FROM userinf WHERE email='$users_email' AND password = '$users_password'";
			$query = $conn->query($sql);

			if($query->num_rows > 0){


				header('location:home_1.php');
			}else{
				 $unsuccessfulmsg = 'Wrong email or Password!';
			}
		}
	}
?>



<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">

<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<title> Login Page </title>
<style>
Body {
  font-family: Calibri, Helvetica, sans-serif;
  background-image: url('PROJECT_pic_5.jpg');
  background-size: 1750px 800px;
}
button {
       background-color: #4CAF50;
       width: 75%;
        color: yellow;
        padding: 15px;
        margin: 10px 0px;
        border: ridge;
        cursor: pointer;
				text-align: center;
 			  text-decoration: none;
 			  display: inline-block;
				transition-duration: 0.4s;
         }

 input[type=text], input[type=password] {
        width: 21.5%;
        margin: 8px 0;
        padding: 5px;
        display: inline-block;
        border: 2px solid green;
        transition-duration: 0.4s;
    }
		input:hover {
					 opacity: 0.4;
			 }
 button:hover {
        opacity: 0.8;
    }
		.submitbtn {
			        width: 30%;
			        padding: 8px 4px;
			        margin: 6px 0px;

			    }
					.loginbtn {
				        width: 30%;
				        padding: 8px 4px;
				        margin: 6px 0px;
				    }
	  .cancelbtn {
	        width: 30%;
	        padding: 8px 4px;
	        margin: 6px 0px;
	    }
			.homebtn{
	      width: 30%;
	      padding: 8px 4px;
	      margin: 6px 0px;
	    }
			.signupbtn{
	      width: 30%;
	      padding: 8px 4px;
	      margin: 6px 0px;
	    }
	 .container {
					padding: 20px;
			}

    h1 {
  color: #145A32;
	text-shadow: 2px 2px lightgreen;
}
div {text-align: center;}
</style>
</head>
<body>

<form action="" method="POST">
    <div class="container" style="margin-top:50px">
      <h1 class="text-center" style="font-size:50px;">Login System</h1>
				<p class="text-center text-success">
				<?php if(!empty($_SESSION['signupmsg'])){ echo $_SESSION['signupmsg']; } ?></p>
			</div>

        <div class="container">
            	<label><h4>E-mail:  &nbsp&nbsp&nbsp&nbsp&nbsp </h4></label>
            <input type="text" placeholder="Enter User email" name="email" value="<?php if(isset($_POST['submit'])){echo $users_email;$_SESSION['email'] = $users_email; } ?>">
								<span class="text-danger"><?php if(isset($_POST['submit'])){ echo $emailmsg; }?></span><br>
            <label><h4>Password : </h4></label>
            <input type="password" placeholder="Enter Password" name="password" >
            <span class="text-danger"><?php if(isset($_POST['submit'])){ echo $passmsg; }?></span><br>
            <button name="submit" class="loginbtn">Login</button> <br>
            <input type="checkbox" checked="checked"> Remember me <br>
            <button type="button" class="cancelbtn"> Cancel</button> <br>
						<button type="submitbtn" class="homebtn" formaction="home.html"> HOME </button> <br>
            <a href="#"> Forgot password? </a> <br>
            <button type="signupbtn" class="signupbtn" formaction="createPage.php"> Create new account </button>

        </div>
    </form>
</body>
</html>
