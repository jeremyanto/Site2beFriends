<?php

$objetPdo = new PDO('mysql:host=localhost;dbname=2befriends', 'root', '');

$pdoStat = $objetPdo->prepare('INSERT INTO user VALUES (NULL, :nom, :prenom, :email, :mdp, :cp)');
$pdoStat->bindValue(':nom', $_POST['nom']);
$pdoStat->bindValue(':prenom', $_POST['prenom']);
$pdoStat->bindValue(':email', $_POST['email']);
$pdoStat->bindValue(':mdp', $_POST['mdp']);
$pdoStat->bindValue(':cp', $_POST['cp']);


$insertIsOk = $pdoStat->execute();


if($insertIsOk){
   echo 'its ok';
}
else{
   echo 'echec';
}

?>

