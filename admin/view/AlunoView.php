<?php

require_once( '../autoload.php' );

use Control\AlunoControl as ctr;

$option = $_POST['option'];
$name = $_POST['name'];

switch ($option):

    case 1:
        echo 'ok'.$name;
        ctr::insert($name);

endswitch;
?>
