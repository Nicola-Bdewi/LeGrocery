<?php

function redirect() {
    //header("location: http://" .$_SERVER['HTTP_HOST'] ."/~t_niloy/index.php#aisle-id");
    //header("location: http://" .$_SERVER['HTTP_HOST'] ."/LeGrocery/index.php#aisle-id");
    header("location: index.php#aisle-id");
    exit;
};

?>