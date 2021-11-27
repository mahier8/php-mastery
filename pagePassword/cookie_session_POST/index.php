<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <h1>Test with A tag</h1>
    <a href="danInfos.php?name=Dan&age=30&height=180">click here to see infos about Dan</a> -->
    <h1>test with form</h1>
    <form action="index.php" method="post">
        <label for="name"> Name</label>
        <input type="text" name="name" id="name">
        <br>
        <label for="age"> Age</label>
        <input type="number" name="age" id="age">
        <br>

        <label for="height"> height</label>
        <input type="number" name="height" id="height">
        <br>
        <input type="submit" value="See my profile">
    </form>
    <button id="forget">Forget about Me</button>
    <h1>test with ajax</h1>
    <div id="profile">
        <?php
        if(!empty($_REQUEST) OR !empty($_COOKIE['username'])){
            session_start();
            include("danInfos.php");
        }
            
        ?>
    </div>
    <script>
        let button = document.querySelector('#forget');
        button.addEventListener("click", function (){
            let xhr = new XMLHttpRequest();
            xhr.open("GET", "destroy.php");
            xhr.addEventListener("load", function(){
                if(xhr.status == 200){
                    console.log(xhr.responseText);
                }
            })
            xhr.send(null);
        })
        let form= document.querySelector("form");
        form.addEventListener('submit', function(e){
            e.preventDefault();
            let formData = new formData(form)
            // formData.append("", "")
            
            // let name = document.querySelector("input[name='name']").value;
            // let age = document.querySelector("input[name='age']").value;
            // let height = document.querySelector("input[name='height']").value;

            let xhr = new XMLHttpRequest();
            xhr.open("POST", `danInfos.php`);
            xhr.addEventListener("load", function() {
                if(xhr.status == 200){
                    console.log(xhr.responseText);
                    let div = document.querySelector('div#profile');
                    div.innerHTML = xhr.responseText;
                }
            });
            // xhr.send(`name=${name}&age=${age}&height=${height}`);
            xhr.send(formData);
        })
    </script>
</body>
</html>