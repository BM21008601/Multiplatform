<html>
<head>
<title>UHI Watersports Login</title>
<link rel="stylesheet" href="css/logInStyle.css"/>
</head>
<body>

<h1>Log In Failed - Please try again</h1>

<form method="post" action="CheckUser.php">
<table>
 <tr>
  <td>Email Address:</td>
  <td><input type="text" name="Email" size="50"/></td>
 </tr>
 <tr>
  <td>Password:</td>
  <td><input type="password" name="Password" size="20"/></td>
 </tr>
 
  <tr>
  <td colspan="2"><input type="submit" value="Log In"/></td>
 </tr>
 </table>
 </form>

<h2>New users - Register here</h2>
<FORM METHOD="LINK" ACTION="RegUser.php">
<INPUT TYPE="submit" VALUE="Register">
</FORM>

<br>
<br>

<audio controls autoplay>
    <source src="audio/loginFail.mp3" type="audio/mpeg">
    Your browser does not support the audio element.
</audio>

</body>
</html>