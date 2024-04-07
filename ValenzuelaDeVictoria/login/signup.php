<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>
<body>
    <form class = "signup" action="" method="post">
        <div class="imgcontainer22">
            <img src="victorialogo.png" alt="Avatar" class="avatar">
        </div>

        <form action="" method="get" name="myForm">
            <div>
            <label class="inline-label" for="lname">Last name:</label>
            <input class="inline-input" type="text" id="lname" name="lname" require_once>
            <label class="inline-label" for="fname">First name:</label>
            <input class="inline-input" type="text" id="fname" name="fname" require_once>
            <label class="inline-label" for="mname">Middle name:</label>
            <input class="inline-input" type="text" id="mname" name="mname" require_once>
            <br>
            <label class="inline-label" for="add">Address:</label>
            <input class="inline-input" type="text" id="add" name="add" style ="width: 293px;" require_once>
            <label class="inline-label" for="zip">Zip code:</label>
            <input class="inline-input" type="text" id="zip" name="zip" style ="width: 293px;" require_once>
            <br><br>
            <label for="number">Phone Number:</label>
            <input type="text" id="number" name="number" style ="width: 75%;" require_once>
            <br>


            <label for="id">Valid ID: </label>
            <div class = "filec">
            <input type="file" id="id" name="id" require_once> 
            <input type="file" id="id1" name="id1" require_once>
            </div>
            <br>

            </label>
            <br>
            <Label>Birth Certificate:</Label>
            <label for="images" class="drop-container" id="dropcontainer" >  
            <span class="drop-title">Drop files here</span>
            or
            <input type="file" id="images" accept="image/*" require_once>
            </label>
            <br>
            <Label>Proof of Income:</Label>
            <label for="images" class="drop-container" id="dropcontainer">  
            <span class="drop-title">Drop files here</span>
            or
            <input type="file" id="images" accept="image/*" require_once>
            </div>
            <div class = "clearfix">
                 <button onclick="location.href='../home.php'" type="button">Sign Up</button>
                <button  onclick="location.href='signin.php'" type="button">Cancel</button>
            </div>
        </form>
        
    

</body>
</html>