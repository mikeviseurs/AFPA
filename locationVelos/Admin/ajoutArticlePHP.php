<?php
$nomArticle = isset($_POST['nomArticle'])? htmlspecialchars($_POST['nomArticle'],ENT_QUOTES) : null;
$descriptionArticle = isset($_POST['descriptionArticle'])? htmlspecialchars($_POST['descriptionArticle'],ENT_QUOTES) : null;
$photoArticle = isset($_POST['photoArticle'])? htmlspecialchars($_POST['photoArticle'],ENT_QUOTES) : null;
echo $nomArticle,"<br>",$descriptionArticle,"<br>",$photoArticle;
?>