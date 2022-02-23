<?php
session_start();
include ('./admin/lib/php/pgConnect.php');
$cnx = new PDO($dsn,$user,$password);
var_dump($cnx);
?>
<!doctype html>
<html>
<head>
    <title>PDO </title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./lib/css/style.css">
</head>
<body>
<header>
    <?php
    if (file_exists('./lib/php/menu_public.php')) {
        include('./lib/php/menu_public.php');
    }
    ?>
</header>

<section id="contenu">
    <div id="main">
        <?php
        if (!isset($_SESSION['page'])) {
            $_SESSION['page'] = "accueil.php";
        }
        if (isset($_GET['page'])) {
            $_SESSION['page'] = $_GET['page'];

        }
        $path = './pages/' . $_SESSION['page'];

        if (file_exists($path)) {
            include $path;
        } else {
            //include('./pages/page404.php');
        }
        ?>
    </div>
</section>
</body>
</html>

