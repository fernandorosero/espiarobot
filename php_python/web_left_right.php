<?php
    $argumento = filter_input(INPUT_POST, "arg");
    echo 'Es lo que llega ::'.$argumento;
    echo exec ('sudo python /var/www/html/espiarobot/python/servo_left_right.py '.$argumento);
    
    //echo exec('sudo python /var/www/html/espiarobot/python/led.py');


    /*
    $posicion = 20;
    echo exec("/usr/bin/python2.7 /var/www/html/espiarobot/python/led.py ".$posicion.'');
    echo ("<H1>pasas:</H1>");
    
    
    $command = escapeshellcmd('sudo python /var/www/html/espiarobot/python/led.py '.$posicion.'');
    $output = exec($command);
    echo "Otra prueba".$output;
     * 
     */
    //$posicion = $_POST["valorLR"];
    //echo exec('sudo python /var/www/espiarobot/python/servo_leftri_ght.py '.$posicion.'');
?> 
