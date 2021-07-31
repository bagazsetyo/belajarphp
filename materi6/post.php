<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="post.php" method="post">
        <table>
            <tr>
                <td>First Name</td>
                <td><?= $_POST['first'] ?></td>
            </tr>
            <tr>
                <td>Last Name</td>
                <td><?= $_POST['last'] ?></td>
            </tr>
        </table>
    </form>
</body>
</html>