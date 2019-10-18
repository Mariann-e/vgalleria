<?php include "connection.php" ?>
<?php

$stmt=$db->prepare("INSERT INTO User VALUES(:id, :Username, :Email, :Etunimi, :Sukunimi, :Salasana)");
$stmt->bindParam(':idUser', $_POST['id']);
$stmt->bindParam(':Username', $_POST['Username']);
$stmt->bindParam(':Email', $_POST['Email']);
$stmt->bindParam(':Etunimi', $_POST['Etunimi']);
$stmt->bindParam(':Sukunimi', $_POST['Sukunimi']);
$stmt->bindParam(':Salasana', $_POST['Salasana']);

if($stmt->execute()){
echo 'Lisättiin käyttäjä: ' .$_POST['id'].' '.$_POST['Username'].' '.$_POST['Email'].' '.$_POST['Etunimi'].' '.$_POST['Sukunimi'].' '.$_POST['Salasana'];
}
else{
echo 'Lisäys epäonnistui. ';
}
 ?>
