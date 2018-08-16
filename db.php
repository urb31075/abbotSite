<?php
if($_SERVER['REQUEST_METHOD'] == 'GET')
  {
    echo 'DATA INSERT METOD GET';
    $rx=$_GET['Rx'];
    $ph=$_GET['Ph'];
    echo '<p>Rx = '.$rx;
    echo '<p>Ph = '.$ph;
  }
  elseif($_SERVER['REQUEST_METHOD'] == 'PUT') 
  {
    echo 'DATA INSERT METOD PUT';
    parse_str(file_get_contents("php://input"),$post_vars);
    $rx=$post_vars['Rx'];
    $ph=$post_vars['Ph'];
    echo '<p>Rx = '.$rx;
    echo '<p>Ph = '.$ph;
  }
?>
