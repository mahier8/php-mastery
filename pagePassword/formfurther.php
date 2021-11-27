<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Page protected by password</title>
    </head>
    <body>
	    <?php
	if (empty($_POST))
	{
	?>
		<p>Please enter the password in order to obtain the access codes for the central games server of the NASA :</p>
        <form action="goingfurther.php" method="POST">
            <p>
                password : 
                <input type="password" name="password" />
                <input type="submit" value="Validate" />
            </p>
        </form>
        <p>This page is reserved for NASA staff. If you are not working at NASA, needless to say, you will never find the password! ;-)</p>
    
	<?php
	}
	// The password has been sent and it is good
	else
	{ 
		if (isset($_POST['password']) AND $_POST['password'] ==  "kangaroo") // if the paswword is good
		{
		// we display the codes
	?>
			<h1>Here are the access codes:</h1>
			<p><strong>CRD5-GTFT-CK65-JOPM-V29N-24G1-HH28-LLFV</strong></p>   
			
			<p>
			This page is reserved for NASA staff. Do not forget to visit it regularly because the access codes are changed weekly.   <br />
			NASA thanks you for your visit.
	        </p>
    <?php
		}
		else // else, we display an error message
		{
			echo '<p>incorrect password</p>';
		}
	}
	?>
	</body>
</html>