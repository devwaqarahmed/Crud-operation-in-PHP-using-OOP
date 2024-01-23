<?php
/*
Author: Waqar Ahmed
Message from Author: Be Happy and make people Happy.....
*/
    require_once('config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/c17740c1e2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <center><h3>CRUD Operations using PHP(OOP)</h3></center>
    <a href="add.php" class="btn btn-primary mb-3 mt-3">Add New User</a>
    <table class="table" width="100%" border="1px" cellspacing="3px" cellpadding="3px">
            <th scope="col">#</th>
            <th>Name</th>
            <th>Email</th>
            <th colspan="2">Actions</th>
        <?php 
        $cnt = 1;
        foreach($tableList as $value){ ?>
          <tr>
            <td><?php echo $cnt; ?></td>
            <td><?php  echo $value['u_name']?></td>
            <td><?php  echo $value['u_email']?></td>
            <td><a href="edit.php?id=<?php echo $value['user_id'];?>"><span class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></span></a></td>
            <td><a onclick="return confirm('Are you sure?')" href="delete.php?id=<?php echo $value['user_id'];?>"><span class="btn btn-primary"><i class="fa-solid fa-trash"></i></span></a></td>
          </tr>
      <?php $cnt++; }
      ?>
    </table>
</body>
</html>