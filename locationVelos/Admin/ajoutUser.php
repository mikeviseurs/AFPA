<?php
$nom = isset($_POST['nom'])? htmlspecialchars($_POST['nom'],ENT_QUOTES) : null;
$prenom = isset($_POST['prenom'])? htmlspecialchars($_POST['prenom'],ENT_QUOTES) : null;
$login = isset($_POST['login'])? htmlspecialchars($_POST['login'],ENT_QUOTES) : null;
echo $login," ",$nom," ",$prenom,"<br>";
?>