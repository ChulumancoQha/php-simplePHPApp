<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test 1</title>
    <style>
        *{
            font-family: sans-serif;
        }
        .hero{
            position: relative;
            left: 25rem;
            top: 40px;
        }
        .container{
            width: 100%;
            height: 25rem;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .holder input[type="text"]{
            height: 30px;
            width: 100%;
            border: none;
            outline: none;
            border-bottom: 2px solid green;
            font-size: 25px;
        }
        .holder input[type="submit"]{
            display: block;
            height: 40px;
            width: 100%;
            border: 1px solid black;
            background-color: orangered;
            color: white;
            font-weight: bold;
            font-size: 25px;
        }
        .footer{
            position: relative;
            left: 550px;
            top: 50px;
        }
    </style>
</head>
<body>
    <h2 class="hero">
        <?php
        echo "Your username is: ".$_POST['name'] ."🚀🚀🚀🔥🔥";
        ?>
    </h2>
    <div class="container">
        <div class="holder">
            <form action="test.php" method="post">
                <div class="wrapper">
                    <input type="text" name="name" placeholder="Enter your username" required>
                </div>
                <br><br>
                <div class="wrapper">
                    <input type="submit" value="submit" name="submit">
                </div>
            </form>
        </div>
    </div>
    <div class="footer">
        Created by ❤️ by Chulumanco Mdutyana
    </div>
</body>
</html>