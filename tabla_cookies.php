<?php
//setcookie("cookieTest[uno]", 1, time() + 3600);
//setcookie("cookieTest[dos]", 2, time() + 3600);
//setcookie("cookieTest[tres]", 3, time() + 3600);

if (isset($_COOKIE["cookieTest"])) {
    if(isset($_POST["btn-eliminar"])){
        unset($_COOKIE['cookieTest']);
    } 
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Cookies Creadas</title>
</head>

<body>
    <h1>Cookies Creadas</h1>
</body>
    <table class="table table-striped">
        <thead>
            <th>Cookie Name</th>
            <th>Cookie Value</th>
        </thead>
        <tbody>
<?php
        if(isset($_COOKIE['cookieTest'])){
            foreach ($_COOKIE['cookieTest'] as $key => $value) {
                echo "<tr><td>$key</td><td>$value</td></tr>";
            }
        }
?>
        </tbody>
    </table>
    <form method="post">
        <button  type="submit" class="btn btn-danger" name="btn-eliminar">Eliminar</button>
    </form>

</html>
