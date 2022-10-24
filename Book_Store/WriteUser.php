<html>
<head>
<link rel="stylesheet" href="css/signUpStyle.css"/>
</head>
<body>
<?php
  include("DbConnect.php");              // Add in the database connection details

  // Get the information from  RegUser.php

  $Forename		 = $_POST['Forename'];
  $Surname		 = $_POST['Surname'];
  $Street		 = $_POST['Street'];
  $Town		 = $_POST['Town'];
  $Postcode		 = $_POST['Postcode'];
  $Email		 = $_POST['Email'];
  $Password   		 = $_POST['Password'];
 
  
//  echo $Email;
//  echo $Password;
  
  
  // At this point we have the information from the form and we can process accordingly.
  
  // Create the SQL statement - Thie SQL statement follows the general insert statement which is :
  // insert into [TableName] [Fieldnames] Values [values to insert] - we are inserting into the users table 
  // so our SQl statement will be
  
  $Query = "insert into bookstore_account (forename,surname,street,town,postcode,email_address,password) values ('$Forename','$Surname','$Street','$Town','$Postcode','$Email','$Password')";
  
  // Now run the query - i.e. Insert the data into the table
  
  $Result = mysqli_query($DB,$Query); 	 // $Result gives us a boolean value to check if the insert was completed ok. 
					 // indicates success. This is very useful for debugging purposes
//  echo $Result;

 if ($Result)
	
	echo 'User login details inserted';		
     else

	echo 'Sorry - unable to complete the operation at present';
  

?>

<FORM METHOD="LINK" ACTION="login.php">


<INPUT TYPE="submit" VALUE="Back to Login">
</FORM>

</body>
</html>


