<?php
phpinfo();

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>TP : Interactive Form </title>
    <link rel="stylesheet" href="/style/style.css">
</head>

<body>
    
    <form id="myForm" method="POST" action="#">

        <span class="form_col">Gender :</span>
        <label><input name="gender" type="radio" value="Male" checked/>Male</label>
        <label><input name="gender" type="radio" value="Female" />Female</label>
        <span class="tooltip">You need to select a gender</span>
        <br /><br />

        <label class="form_col" for="lastName">LastName :</label>
        <input name="lastName" id="lastName" type="text" />
        <span class="tooltip">A lastname cannot be less than 2 characters</span>
        <br /><br />

        <label class="form_col" for="firstName">Firstname :</label>
        <input name="firstName" id="firstName" type="text" />
        <span class="tooltip">A firstname cannot be less than 2 characters</span>
        <br /><br />

        <label class="form_col" for="age">Age :</label>
        <input name="age" id="age" type="number" />
        <span class="tooltip">The age has to be between 5 and 140</span>
        <br /><br />

        <label class="form_col" for="login">Login :</label>
        <input name="login" id="login" type="text" />
        <span class="tooltip">The login cannot be less than 4 characters</span>
        <br /><br />

        <label class="form_col" for="pwd1">Password :</label>
        <input name="pwd1" id="pwd1" type="password" />
        <span class="tooltip">The password cannot be less than 6 characters</span>

        <br /><br />

        <label class="form_col" for="pwd2">Password : (confirmation) :</label>
        <input name="pwd2" id="pwd2" type="password" />
        <span class="tooltip">The password confirmation has to be the same as the original one</span>
        <br /><br />

        <label class="form_col" for="country">Country :</label>

        <select name="country" id="country">
            <option value="none">Select your residence country</option>
            <option value="UK">UK</option>
            <option value="USA">USA</option>
            <option value="South Korea">South Korea</option>
        </select>
        <span class="tooltip">You have to select your residence country</span>

        <br /><br />

        <span class="form_col"></span>
        <label><input name="news" type="checkbox" /> I want to receive the newsletter every month</label>
        <br /><br />

        <span class="form_col"></span>
        <input type="submit" value="Subscribe" /> <input type="reset" value="Reset the form" />

    </form>

    <?php
	if (!empty($_POST))
	{
		if (!empty($_POST['gender'])) { 
            echo "<p>Your gender is :" .$_POST['gender']."</p></br> ";

        } else {
            echo "please enter your gender </br> </br>" ;
        }

        if (!empty($_POST['lastName'])) {
            echo "<p>Your last name is :" .$_POST['lastName']."</p></br> ";
        } else {
            echo "please enter your last name </br> </br>";
        }

        if (!empty($_POST['firstName'])) {
            echo "<p>Your first name is :" .$_POST['firstName']."</p></br> ";
        } else {
            echo "please enter your first name </br> </br>";
        } 

        if (!empty($_POST['age'])) {
            echo "<p>Your age is :" .$_POST['age']."</p></br> ";
        } else {
            echo "please enter your age </br> </br>";
        }

        if (!empty($_POST['login'])) {
            echo "<p>Your login is :".$_POST['login']."</p></br> ";
        } else {
            echo "please enter your login </br> </br>";
        }

        if (!empty($_POST['pwd1'])) {
            echo "<p>Your password is :" .$_POST['pwd1']."</p></br> ";
        } else {
            echo "please enter your password </br> </br>";
        }

        if (!empty($_POST['pwd2'])) {
            echo "<p>Your password reentry is :" .$_POST['pwd2']."</p></br> ";
        } else {
            echo "please reenter your password </br> </br>";
        }

        if (!empty($_POST['country'])) {
            echo "<p>Your country is :" .$_POST['country']."</p></br> ";
        } else {
            echo "please enter your country </br> </br>";
        }

        
        // I need to link all the values I need below here
	?>


        <?php
		} else // else, we display an error message
		{
			echo '<p>incorrect password</p>';
		}
	?>
    </body>
</html>
    