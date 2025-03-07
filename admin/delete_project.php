<?php
require_once('../includes/connect.php');
$query = 'DELETE FROM project_pages WHERE project_pages.id = :project_pagesId';
$stmt = $connect->prepare($query);
$projectId = $_GET['id'];
$stmt->bindParam(':project_pagesId', $projectId, PDO::PARAM_INT);
$stmt->execute();
$stmt = null;
header('Location: project_list.php');
?>