<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles.css">
    <title>NPRU</title>
</head>
<body>
    <?php include_once './component/navbar.php' ?>
    <div class="bodyIndex">
        <div class="containerIndex">
            <div class="leftIndex">
                <h2>Welcome to ...</h2>
                <h1>NPRU4Community</h1>
            </div>
            <div class="rightIndex">
                <div class="rowIndex">
                    <?php include_once './controller/con_community.php' ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>