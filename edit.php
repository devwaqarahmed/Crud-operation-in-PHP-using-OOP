<?php
    require_once('config.php');
    $id= $_GET['id'];
    $updatedata= $db->getUpdateData($id);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Update User</title>
</head>
<body>
    <h3 class="text-center mt-5">Update User Information</h3>
    <a href="index.php"<button class="btn btn-primary mt-3 mb-3">Homepage</button></a>
    <form action="<?php echo htmlspecialchars('config.php')?>" method="post">
    <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input class="form-control" type="text" name="name" value="<?php echo $updatedata['u_name']; ?> ">
    </div>
    <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input class="form-control" type="email" name="email" value="<?php echo $updatedata['u_email']; ?> ">
    <input type="hidden" name="id" value="<?php echo $id; ?> ">
    <div class="mb-3">
    <input type="submit" class="btn btn-primary mt-3" name="update" value="Update">
    </form>
</body>
</html>