<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple PHP App</title>
    <style>
        *{
            font-family: sans-serif;
        }
        /* body{
            width: 100%;
            height: 100%;
            background-color: blue;
            display: flex;
            flex-direction: column;
            column-gap: 40px;
            
        } */
        .container{
            height: 24rem;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .holder{
            display: flex;
            flex-direction: column;
        }
        .hero{
            position: relative;
            left: 30%;
            top: 35px;
        }
        .holder input[type="text"]{
            height: 30px;
            background: transparent;
            border: none;
            outline: none;
            font-size: 20px;
            border-bottom: 2px solid green;
        }
        .holder input[type="submit"]{
            display: block;
            height: 32px;
            width: 250px;
            font-size: 20px;
            border: 1px solid black;
            outline: none;
            background-color: orangered;
            color: white;
        }
        .footer{
            position: relative;
            left: 550px;
            top: 100px;
        }
    </style>
</head>

<body>
    <h2 class="hero">
        <?php
        if(isset($_POST['submit'])){
            echo "This is your username: ".$_POST['name']."🚀🚀🚀🔥🔥";
        }
        ?>
    </h2>
    <div class="container">
        <div class="holder">
            <form action="index.php" method="post">
                <div class="wrapper">
                    <input type="text" name="name" placeholder="Enter your Username" required>
                </div>
                <br><br>
                <div class="wrapper">
                    <input type="submit" value="submit" name="submit">
                </div>
            </form>
        </div>
    </div>
    <div class="footer">
        <h4>
            This website was created with <span>❤️</span> by Chulumanco Mdutyana!!
        </h4>
    </div>
</body>
</html>