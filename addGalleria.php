<?php include "connection.php" ?>
<?php

$stmt=$db->prepare("INSERT INTO Galleria VALUES(:idGalleria, :AlkPVM, :LopPVM, :Nayttelynimi, :Kuvaus)");
$stmt->bindParam(':idGalleria', $_POST['id']);
$stmt->bindParam(':AlkPVM', $_POST['AlkPVM']);
$stmt->bindParam(':LopPVM', $_POST['LopPVM']);
$stmt->bindParam(':Nayttelynimi', $_POST['Nayttelynimi']);
$stmt->bindParam(':kuvaus', $_POST['Kuvaus']);

if($stmt->execute()){
echo 'Lisättiin näyttely: ' .$_POST['id'].' '.$_POST['AlkPVM'].' '.$_POST['LopPVM'].' '.$_POST['Nayttelynimi'].' '.$_POST['Kuvaus'];
}
else{
echo 'Lisäys epäonnistui. ';
}
 ?>
