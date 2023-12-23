<?php
    include_once '../model/ConDB.php';
    include_once '../model/tourDB.php';
    $obj_name = new Tour();
    $rs2 = $obj_name->getCommunityBylocation($location);

    foreach ($rs2 as $result2){ ?>
        <div class="columnCard">
                <div class="card">
                    <img src="../upload/<?=$result2['images']?>" alt="image" style="width:250px">
                    <p><?=$result2['name']?></p>
                    <p><?=$result2['activity']?></p>
                    <a href="./detail.php?id=<?=$result2['id']?>"><button type="button" class="buttonGreen">Info</button></a>
                </div>      
            </div>
<?php }?>