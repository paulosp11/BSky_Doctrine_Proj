<?php

require_once "../connection.php";

?>

<html>
<body>
<h1>Doctrine MySQL</h1>
<br/>
<a href="index.php">Menu</a>
<br/>

<form action="#" method="post">
    <label for="name"> Name.: </label>
    <input type="text" id="name" name="name" > <br/>

    <label for="email"> Email.: </label>
    <input type="text" id="email" name="email" ><br/>

    <label for="phone"> Phone.: </label>
    <input type="text" id="phone" name="phone" ><br/> <br/>

    <input type="submit" value="Submit">
</form>
</body>
</html>

<?php

if(isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["email"]) )
{


$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];

//$newperson = $argv[1];

$newperson = new Person();
$newperson->setName($name);
$newperson->setEmail($email);
$newperson->setPhone($phone);


$entityManager->persist($newperson);
$entityManager->flush();

header("Location: list_person.php");

}


?>