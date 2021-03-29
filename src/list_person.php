<html>
<head>

<?php
   require_once "../connection.php"; 

    $personRepository = $entityManager->getRepository('Person');
    $persons = $personRepository->findAll();
?>

</head>
<body>
 <h1>Doctrine MySql</h1>
 <br/>
 <a href="index.php">Menu</a>
 <br/>

 <table>
    <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Phone</th>
    <th></th>
    </tr>
    <?php foreach($persons as $person) { ?>
        <tr>
            <td><?php print $person->getId() ?> </td>   
            <td><?php print $person->getName() ?> </td>   
            <td><?php print $person->getEmail() ?> </td>   
            <td><?php print $person->getPhone() ?> </td>   
            <td><a href="update_person.php?Pid=<?php print $person->getId() ?>">update</a></td>   
            <td><a href="delete_person.php?Pid=<?php print $person->getId() ?>">delete</a></td>   
        </tr>
    <?php } ?>

     <!-- echo sprintf("-%s\n", $person->getName()); -->

 </table>
</body>
</html>
