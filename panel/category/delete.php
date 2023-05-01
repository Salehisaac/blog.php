<?php
    require_once '../../function/helpers.php';
    require_once '../../function/pdo_conection.php';


    if(isset($_GET['cat_id']) && $_GET['cat_id'] !== ''){
        global $pdo;
        $query = 'DELETE FROM php_project.categories WHERE id = ?';
        $statement = $pdo->prepare($query);
        $statement->execute([$_GET['cat_id']]);

    }
    redirect('panel/category');


?>