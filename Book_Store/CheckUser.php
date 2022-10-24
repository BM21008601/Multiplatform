<?php
  // Start the session
  session_start();
?>

<html>
<head>
</head>
<body>
<?php
  include("DbConnect.php");              // Add in the database connection details

  // Now get the information from the Form
  $Email	 = $_POST['Email'];
  $Password   = $_POST['Password'];
  
//echo $Email;
//echo $Password;
  $Query = "SELECT * FROM bookstore_account
  WHERE  email_address = '$Email'
  AND password ='$Password'";
  
//   Now run the query - i.e. Query the data in the table
  
  $Result = mysqli_query($DB,$Query);	 // $Result gives us a numeric value to check if the query found a match ok. 
				 	 
									   
  $NumResults = mysqli_num_rows($Result);	
								   
//echo $NumResults;

  if ($NumResults==1)
  { 
    header('Location: index.html');
  }  
  else 
  {
    header('Location: LoginFail.php');
  }

  // Set session variables
  $_SESSION["Email"] = $Email;

  while ($Row = mysqli_fetch_assoc($Result))
  {
    $_SESSION['UserNo'] = $Row['user_no'];
    $_SESSION['Forename'] = $Row['forename'];
    $_SESSION['Surname'] = $Row['surname'];
    $_SESSION['Street'] = $Row['street'];
    $_SESSION['Town'] = $Row['town'];
    $_SESSION['Postcode'] = $Row['postcode'];
  }
?>

</body>
</html>


