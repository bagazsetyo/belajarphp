<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $file_name = $_FILES['file']['name'];
        $file_type = $_FILES['file']['type'];
        $file_size = $_FILES['file']['size'];
        $file_tmp_name = $_FILES['file']['tmp_name'];
        $file_error = $_FILES['file']['error'];

        move_uploaded_file($file_tmp_name, __DIR__ . '/file/' . $file_name);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if($_SERVER['REQUEST_METHOD'] == "POST"){
    ?>

            <table>
                <tr>
                    <td>name</td>
                    <td><?= $file_name ?></td>
                </tr>
                <tr>
                    <td>type</td>
                    <td><?= $file_type ?></td>
                </tr>
                <tr>
                    <td>size</td>
                    <td><?= $file_size ?></td>
                </tr>
                <tr>
                    <td>tmp_name</td>
                    <td><?= $file_tmp_name ?></td>
                </tr>
                <tr>
                    <td>error</td>
                    <td><?= $file_error ?></td>
                </tr>
            </table>

    <?php
        }
    ?>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <label for="">First Name:
            <input type="file" name="file">
        </label>
        <br />
        <input type="submit" value="Upload">
    </form>
</body>
</html>