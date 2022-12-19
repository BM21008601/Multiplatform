<html>
<head>
<title>Create New User</title>
<link rel="stylesheet" href="css/signUpStyle.css"/>
</head>
<body>
<h2>Register User details</h2>

<form ng-app="myApp" ng-controller="myCtrl" method="post" onsubmit = "return validate()" action="WriteUser.php">

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
  <td>Nationality:</td>
  <td><select ng-model="clubs" ng-options="country for (country, clubs) in countries">
	</select> </td>
 </tr>
 <tr>
  <td>Club:</td>
  <td><select name="clubSelection" ng-model="club" ng-disabled = "!clubs" ng-options="club.value for club in clubs track by club.value">
	</select>
 </tr>
 <tr>
  <td>Email Address:</td>
  <td><input type="text" id="Email" name="Email" size="30" > </td>
  <td><p id="emailValid"></p><td>
 </tr>
 <tr>
  <td>Password:</td>
  <td><input type="Password" id="Password" name="Password" size="10" > </td>
  <td><p id="passwordValid"></p><td>
 </tr>
 <tr>
  
<script src="js/validate.js"></script>

<script>
var app = angular.module('myApp', []);
app.controller('myCtrl', function($scope) {

	$scope.countries = {

			'Scottish': [{value:'Celtic'},{value:'Rangers'},{value:'ICTFC'},{value:'Ross County'}],
			'Irish': [{value:'Shamrock Rovers'},{value:'Bray Wanderers'},{value:'Cork City'},{value:'Bohemians'}],
			'Welsh': [{value:'Penybont'},{value:'Goytre United'},{value:'Afan Lido'},{value:'Monmouth Town'}],
			'English': [{value:'Man City'},{value:'Chelsea'},{value:'Man Utd'},{value:'Liverpool'}]

		}

	}
 
);
</script>

 <td colspan="2"><input type="submit" value="Add User"/></td>
 </tr>
<tr>
  <td colspan="2"><input type="reset" value="Clear"/></td>
 </tr>
</table>
</form>

<footer>
    <script src="js/accessibility.js"></script>
    <button onclick="lightMode()">Light Mode</button>
    <button onclick="darkMode()">Dark Mode</button>
</footer>

</body>
</html>
