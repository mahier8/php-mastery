<?php
    session_start(); // to start the session

    $_SESSION['password'] = 'kangaroo'; // create the session variable storing password
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="secret.php" method="post">
        <p>Please enter your password</p>
        <input type="password" name="password">
        <!-- I add the type submit to push form to backend -->
        <button type="submit">validate</button> 
        <p>This page is reserved for NASA employees only</p>
    </form>
        
</body>
</html>


    <!-- <script>
        let form = document.querySelector('input');
        form.addEventListener('click', function {
            e.preventDefault();
            // formData
            let formdata = new FormData(); // this will be the form object
            // formdata.append("");
        });

        // use form data
        let xhr = new XMLHttpRequest();
        xhr.open("POST", "secret.php")
        xhr.addEventListener('load', function(e) {
            if (e.target.status === 200) {
                console.log(xhr.responseText)
                // positive action
            } else {
                alert('error');
                // positive action
            }   
        });
        xhr.send(formData)
    </script>-->