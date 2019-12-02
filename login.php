<?php include ('server.php')?>
<!DOCTYPE html>
<html>
    <head>
	    <meta charset="ISO-8859-1">
    	<title>Login</title>
    </head>
    <body>
    	<form action="login.php" method="post">
    	<?php include ('errors.php')?>
    		<table>
        		<tr>
        			<td colspan="2"><h3>Login Details</h3></td>
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
        			<td></td>
        			<td><input type="submit" name="login"></td>
        		</tr>
    		</table>
    	</form>
    	<p>Not registered? <a href="registration.php"><b>Register</b></a></p>
    </body>
</html>