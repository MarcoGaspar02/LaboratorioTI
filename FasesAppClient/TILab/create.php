<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/bootstrap5.0/bootstrap.css">
    <link rel="stylesheet" href="./css/bootstrap5.0/bootstrap-grid.css">
    <link rel="stylesheet" href="./css/bootstrap5.0/bootstrap.min.css">
    <link rel="stylesheet" href="./css/bootstrap5.0/bootstrap-grid.min.css">
    <link rel="stylesheet" href="./css/bootstrap5.0/bootstrap-reboot.css">
    <link rel="stylesheet" href="./css/bootstrap5.0/bootstrap-reboot.min.css">

    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <header class="p-5 bg-dark text-white">
        <h1>O meu Jornal</h1>
        <h3>Aplicação para consultar e publicar notícias</h3>
    </header>

    <div id="main">
        <div class="asside bg-dark">
            <b><a class="menu-item" href="./index.php">Ver notícias</a>
            <a class="menu-item" href="./create.php">Publicar notícias</a></b>
        </div>
        <div class="content">
        <form action="/serverAPI.php" method="POST">
            <label for="fname">Título da notícia:</label><br>
            <input type="text" id="fname" name="title" value=""><br>
            <label for="lname">Artigo:</label><br>
            <input type="text" id="lname" name="article" value=""><br><br>
            <input type="submit" value="Submit">
        </form> 
        </div>
    </div>
</body>

</html>