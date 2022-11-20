<?php

    require "Constructor_Logger.php";

    $logger = new FileLogger('./log.txt', 'a');
    $logger->log('PHP interfae is awesome');

    echo "File logged!!!"

?>