<?php
require_once('../includes/connect.php');
$query = "UPDATE project_pages SET name = ?,photo = ?,description= ? WHERE id = ?";

$stmt = $connect->prepare($query);

$stmt->bindParam(1, $_POST['name'], PDO::PARAM_STR);
$stmt->bindParam(2, $_POST['photo'], PDO::PARAM_STR);
$stmt->bindParam(3, $_POST['desc'], PDO::PARAM_STR);
$stmt->bindParam(4, $_POST['pk'], PDO::PARAM_INT);

$stmt->execute();
$stmt = null;
header('Location: project_list.php');
?>
