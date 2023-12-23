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
    <div class="bodyForm">
    <div class="containerForm">
        <form name="register" id="register" method="post" enctype="multipart/form-data">
            <h1 class="center">Register</h1>
            <div class="form-group">
                <label for="name">Name :</label>
                <input type="text" name="name" id="name" placeholder="your_name" required>
            </div>
            <div class="form-group">
                <label for="tel">Tel :</label>
                <input type="text" name="tel" id="tel" placeholder="your_phone" required>
            </div>
            <div class="form-group">
                <label for="date">Date :</label>
                <input type="date" name="date" id="date" required>
            </div>
            <div class="form-group">
                <div class="positionCenter">
                    <button type="submit" class="buttonGreen">Register</button>
                </div>
            </div>
        </form>
        <script src="../script.js"></script>
    </div>
    </div>
</body>
</html>

