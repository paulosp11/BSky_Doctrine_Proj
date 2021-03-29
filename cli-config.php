<?php
//cli-config.php

// This file is necessary because is going to load tool which is reponssible to create database scheme 
require_once "connection.php";

return \Doctrine\ORM\Tools\Console\ConsoleRunner::createHelperSet($entityManager);

?>
