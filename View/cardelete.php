<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>Confirm: Deleting <?= htmlentities($row['carname']) ?></p>

    <form method="post">
        <input type="hidden" name="user_id" value="<?= $row['carmodel'] ?>">
        <input type="submit" value="Delete" name="delete">
        <a href="index.php">Cancel</a>
    </form>

</body>

</html>