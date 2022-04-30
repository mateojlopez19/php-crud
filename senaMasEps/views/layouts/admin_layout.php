<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        body{
            background-image: linear-gradient(to right, #e5e8f0, #dde8ee, #d9e8e8, #d9e6df, #dfe3d7);
        }
    </style>
</head>

<body>
    <?php include_once('menu.php'); ?>

    <?php 
        require_once 'views/' . $current_view;
    ?>

    <?php include_once('footer.php'); ?>
</body>


<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="libs/bootstrap-dist/js/bootstrap.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</html>