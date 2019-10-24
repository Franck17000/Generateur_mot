<html>
<div class="">
<form action="generer.php" method="post">
 <p>Votre nom : <input type="text" name="nom" /></p>
 <p>Votre âge : <input type="text" name="age" /></p>
 <p><input type="submit" value="OK"></p>
</form>
</div>
</html>


<?php
require_once('src/Router.php');

$request = new Src\Request();
$router = new Src\Router($request);

require_once('app/routes.php');

echo $router->render();
?>