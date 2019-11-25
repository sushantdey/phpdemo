<!DOCTYPE html>
<html>
    <head>
	    <meta charset="ISO-8859-1">
    	<title>Register</title>
    </head>
    <body>
        <form action="registration.php" method="post">
        	<table>
        		<tr>
        			<td colspan="2"><h3>Registration Details</h3></td>
        		</tr>
        		<tr>
        			<td>Name: </td>
        			<td><input type="text" name="name"></td>
        		</tr>
        		<tr>
        			<td>Grade: </td>
        			<td><input type="text" name="grade"></td>
        		</tr>
        		<tr>
        			<td>Technology: </td>
        			<td><input type="text" name="technology"></td>
        		</tr>
        		<tr>
        			<td>Username: </td>
        			<td><input type="text" name="username"></td>
        		</tr>
        		<tr>
        			<td>Password: </td>
        			<td><input type="password" name="password"></td>
        		</tr>
        		<tr>
        			<td>Confirm Password: </td>
        			<td><input type="password" name="confirmPassword"></td>
        		</tr>
        		<tr>
        			<td></td>
        			<td><input type="submit" name="submit"></td>
        		</tr>
        	</table>
        </form>
    </body>
</html>