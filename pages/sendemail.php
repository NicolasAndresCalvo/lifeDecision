<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
       
        $to_email = 'nico.calvo2014@gmail.com';
        $subject = $_REQUEST['asunto'];
        $message = $_REQUEST['mensaje'];

        mail($to_email,$subject,$message);

        header("Location: ../index.php");
    ?>
  </body>
</html>