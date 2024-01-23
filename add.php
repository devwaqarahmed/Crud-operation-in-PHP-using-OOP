<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Add Users</title>
</head>
<body>
    <h3 class="text-center mt-5">Insert New User</h3>
    <a href="index.php" class="btn btn-primary mt-3 mb-3">Homepage</a>
    <form  action="<?php echo htmlspecialchars('config.php')?>" method="post">
    <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input class="form-control" type="text" name="name" required>
    </div>
    <div class="mb-3">
    <label for="name" class="form-label">Email</label>
    <input class="form-control" type="email" name="email" required>
    </div>
    <input class="btn btn-primary mt-3" type="submit" name="insert" value="Insert">
    </form>
    
</body>
</html>