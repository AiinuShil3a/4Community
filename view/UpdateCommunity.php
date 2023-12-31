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
    <?php $id = htmlspecialchars($_GET["id"]); ?>
    <?php include_once '../controller/con_communityById.php' ?>
    <div class="bodyForm">
    <div class="containerForm">
        <form name="update" action="../controller/con_update.php?id=<?= $rs[0]['id'] ?>" id="update" method="post" enctype="multipart/form-data">
            <h1 class="center">Update</h1>
            <div class="form-group">
                <label for="name">Name :</label>
                <input type="text" name="name" id="name" placeholder="<?= $rs[0]['name'] ?>" required>
            </div>
            <div class="form-group">
                <label for="activity">Activity :</label>
                <input type="text" name="activity" id="activity" placeholder="<?= $rs[0]['activity'] ?>" required>
            </div>
            <div class="form-group">
                <label for="location">Location :</label>
                <input type="text" name="location" id="location" placeholder="<?= $rs[0]['location'] ?>" required>
            </div>
            <div class="form-group">
                <input type="file" name="image" id="image" accept="image/*" required>
            </div>
            <div class="form-group">
                <div class="positionCenter">
                    <button type="submit" class="buttonGreen">Update</button>
                </div>
            </div>
        </form>

    </div>
    </div>
</body>
</html>