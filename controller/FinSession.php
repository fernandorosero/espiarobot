<?php

    $pathAbsolute = filter_input(INPUT_POST, 'pathAbsolute');
    session_start();
    session_destroy();
    header("Location: ".$pathAbsolute);
    exit;
?>

