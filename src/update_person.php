<html>
<head>

<?php 
    require_once "../connection.php";

    $id = $_GET["Pid"];

    $person = $entityManager->find('Person', $id);

    if ($person === null) {
       echo "No person found.\n";
    }   
?>

</head>
<h1>Doctrine MySQL</h1>
<br/>
<a href="index.php">Menu</a>
<br/>

<form action="#" method="post">
    <label for="name"> Name.: </label>
    <input type="text" value="<?php print $person->getName() ?>" id="name" name="name" > <br/>

    <label for="email"> Email.: </label>
    <input type="text" value="<?php print $person->getEmail() ?>" id="email" name="email" ><br/>

    <label for="phone"> Phone.: </label>
    <input type="text" value="<?php print $person->getPhone() ?>" id="phone" name="phone" ><br/> <br/>

    <input type="submit" value="Submit">
</form>
</body>
</html>

<?php 
   
   if (isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["email"]) )
   {
       $name = $_POST["name"];
       $email = $_POST["email"];
       $phone = $_POST["phone"];

       $person->setName($name);
       $person->setEmail($email);
       $person->setPhone($phone);

       $entityManager->flush();

       header("Location: list_person.php");
   }
?>   
