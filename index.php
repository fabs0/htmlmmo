<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Cannibal Island</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div id="main"> 
        <div id="header">
            <div id="logo">
                <h1>Cannibal Island</h1>
                <!-- <img src="" alt="Cannibal Island Logo"> -->
            </div>
            <div id="menu">

            </div>
        </div>
        <div id="content" onLoad='resetCookies()'>
            <div id="game" align="center">
                <iframe src="welcome.php" frameborder="0" width="800" height="500"></iframe>
            </div>
        </div>
        <div id="footer">
            <div id="legal" align="center">
                <br/>
                <b>Copyright &copy; 2021 fxby.de</b>
                <br/>

            </div>
        </div>
    </div>
</body>
<script src="js/game.js"></script>
</html>