<?php $id = htmlspecialchars($_GET["id"]); ?>
<?php include_once '../controller/con_communityById.php' ?>
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
        <div class="containerDetail">
            <div class="leftDetail">
                <img src="../upload/<?= $rs[0]['images'] ?>" alt="image" style="width:350px">
            </div>
            <div class="rightDetail">
                <h4><?= $rs[0]['name'] ?></h4>
                <h4><?= $rs[0]['activity'] ?></h4>
                <h4><?= $rs[0]['location'] ?></h4> 
                <div class="form-group">
                    <div class="positionCenter">
                        <a href="#"><button id="confirm" type="button" class="buttonGreen" >จอง</button></a>&nbsp;&nbsp;
                        <a href="./UpdateCommunity.php?id=<?=$id?>"><button type="button" class="buttonYellow">แก้ไข</button></a>&nbsp;&nbsp;
                        <a href="../controller/con_delete.php?id=<?=$id?>"><button id="delete" type="button" class="buttonRed" onclick="return confirm('คุณต้องการจะลบข้อมูลชุดนี้หรือไม่? แน่ใจนะ!!')">ลบ</button></a>&nbsp;&nbsp;
                    </div>
                </div>
            </div>
        </div>
        <script src="../confirm.js"></script>
    </div>
    </div>
</body>
</html>

