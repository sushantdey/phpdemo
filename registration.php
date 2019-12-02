<?php include ('server.php')?>
<!DOCTYPE html>
<html>
    <head>
	    <meta charset="ISO-8859-1">
    	<title>Register</title>
    </head>
    <body>
        <form action="registration.php" method="post">
        <?php include ('errors.php')?>
        	<table>
        		<tr>
        			<td colspan="2"><h3>Registration Details</h3></td>
        		</tr>
        		<tr>
        			<td>Name: </td>
        			<td><input type="text" name="name" required="required"></td>
        		</tr>
        		<tr>
        			<td>Grade: </td>
        			<td><input type="text" name="grade" required="required"></td>
        		</tr>
        		<tr>
        			<td>Technology: </td>
        			<td><input type="text" name="technology" required="required"></td>
        		</tr>
        		<tr>
        			<td>Username: </td>
        			<td><input type="text" name="username" required="required"></td>
        		</tr>
        		<tr>
        			<td>Password: </td>
        			<td><input type="password" name="password" required="required"></td>
        		</tr>
        		<tr>
        			<td>Confirm Password: </td>
        			<td><input type="password" name="confirmPassword" required="required"></td>
        		</tr>
        		<tr>
        			<td></td>
        			<td><input type="submit" name="register" value="Submit"></td>
        		</tr>
        	</table>
        </form>
        <p>Already a user? <a href="login.php"><b>Login</b></a></p>
    </body>
</html>