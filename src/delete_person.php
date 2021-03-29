<?php

require_once "../connection.php";

$id = $_GET["Pid"];

$person = $entityManager->find('Person', $id);

$entityManager->remove($person);

$entityManager->flush();

header("Location: list_person.php");

?>