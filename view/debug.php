<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="" method="post">
        <select name="nameCompanies">
            <?php foreach ($array as $company) {
            ?>
                <option value="<?php echo $company['id'] ?>"><?php echo $company['company'] ?></option>
            <?php
            }
            ?>
        </select>
        <input type="submit" value="Submit">
    </form>
</body>

</html>