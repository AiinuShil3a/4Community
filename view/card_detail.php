<?php $location = htmlspecialchars($_GET["location"]); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles.css">
    <title>Document</title>
</head>
<body>
    <?php include_once '../component/navbar.php' ?>
    <div class="bodyCard">
        <h1><?php echo $location  ?></h1>
        <a href="./CreateCommunity.php?location=<?php echo $location  ?>"><button id="confirm" type="button" class="buttonGreen" >Create</button></a>
        <div class="rowCard">
            <?php include_once '../controller/con_communityByLocation.php' ?>
        </div>
    </div>
</body>
</html>

