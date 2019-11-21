
<?PHP
include_once('usuario.php');
  session_start();

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?PHP
      $user =  $_SESSION["user"];
      echo "Bienvenido ".$user->getNombre();
      <a href="index.html">>Home</a><br>
    ?>
  </body>
</html>
