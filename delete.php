<?php
    require_once('config.php');
    $id= $_GET['id'];
    $db->DeleteUser($id);
    