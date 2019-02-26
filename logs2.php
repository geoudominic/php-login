<!DOCTYPE html>
<html>
<head>
	<title>web application</title>
<!-- //for including bootstrap -->
			<meta name="viewport" content="width=device-width, initial-scale=1">
			  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
			  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
			  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

	<style type="text/css">

 		/*//style for container class division*/
    	.container{background-color: #69f0ae;position:absolute;width:400px;top:50%;left:50%;height:300px;transform: translate(-50%, -50%);border-radius: 5%;}
	</style>


	</head>
	<body>



<?php
session_start();			 //session starting


class Userdata 				//first class for store default values
{


	private $name='0';
	private $password='1';


public function username()
	{
         

		return $this->name;
		
	}
	public function userpassword()
	{
		return $this->password;
	}
}

class getform  				//second class for get data from form
{

		public function getname()
	{
			if(isset($_POST['submit']))
		{
			$name1 = $_POST['username'];

			$_SESSION["name"] = $_POST['username'];//assigning session name
			return $name1;
		}
	}

   		 public function getpassword()
    {
    		if(isset($_POST['submit']))
    	{
			$password1 = $_POST['password'];

			$_SESSION["password"] = $_POST['password'];//assigning session password
			return $password1;
		}
	}


}



class validation   				//third class for validation function
{
	public function valid()
	{

			$defaultdata=new Userdata();  	//object creation of class userdata
			$defaultname=$defaultdata->username();
			$defaultpassword=$defaultdata->userpassword();


			$inputdata=new getform();		//object creation of class getform		
			$formname=$inputdata->getname();
			$formpassword=$inputdata->getpassword();


				if($defaultname==$formname && $defaultpassword==$formpassword)		//condition 
			{

				header("location: welcome.php");
			}
							else
			{
				// header("location: logs2.php");
 				echo "<script> alert('invalid username or password: PLEASE TRY AGAIN'); </script>";


			}
  	}

 }

	if(isset($_POST['submit']))     //function call on submit button
	{
    	$validation=new validation();
        $validation->valid();
    

	 }

?>



<!-- //FORM CREATION -->

<div class="container">
	  	<h2><center><b>Sign In</b></center></h2>
	 	 <form method="POST">
		    	<div class="form-group">
		     		 <label for="username">Name:</label>
		     		 <input type="text" class="form-control" name="username" placeholder="Enter user name">
		    		</div>
		   		 <div class="form-group">
		     		 <label for="password">Password:</label>
		     		 <input type="password" class="form-control" name="password" placeholder="Enter password">
		   		 	</div>
		     
		    <input type="submit" class="btn btn-primary" name="submit" value="Login">
 		 </form>
</div>

</body> 
</html>