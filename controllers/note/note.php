<?php

require 'models/Database.php';

$id = $_GET['id'];

$note = $connexion->prepare('SELECT note.*, user.name AS author_name FROM note LEFT JOIN user ON note.user_id = user.user_id WHERE note.id = :id');
$note->bindParam(':id', $id);
$note->execute();
$note = $note->fetch();


require 'views/note/note.view.php';
