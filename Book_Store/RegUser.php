<html>
<head>
<title>Create New User</title>
<link rel="stylesheet" href="css/signUpStyle.css"/>
</head>
<body>
<h2>Register User details</h2>

<form method="POST" action="WriteUser.php">

<table>
 <tr>
  <td>Forename:</td>
  <td><input type="text" name="Forename" size="20" > </td>
 </tr>
 <tr>
  <td>Surname:</td>
  <td><input type="text" name="Surname" size="20" > </td>
 </tr>
 <tr>
  <td>Street:</td>
  <td><input type="text" name="Street" size="40" > </td>
 </tr>
 <tr>
  <td>Town:</td>
  <td><input type="text" name="Town" size="20" > </td>
 </tr>
 <tr>
  <td>Postcode:</td>
  <td><input type="text" name="Postcode" size="10" > </td>
 </tr>
 <tr>
  <td>Email Address:</td>
  <td><input type="text" name="Email" size="30" > </td>
 </tr>
 <tr>
  <td>Password:</td>
  <td><input type="Password" name="Password" size="10" > </td>
 </tr>
 <tr>
  
 <td colspan="2"><input type="submit" value="Add User"/></td>
 </tr>
<tr>
  <td colspan="2"><input type="reset" value="Clear"/></td>
 </tr>
</table>
</form>

</body>
</html>
