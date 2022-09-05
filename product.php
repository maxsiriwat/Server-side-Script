<!DOCTYPE html>
<html>
    <head>
        <h1>KitShop</h1>
    </head>
    <body>
        
        <?php
           $Myproduct = [
            [
            "id" => 01, "name"=> "Manchester City Home Jersey 2022/23", "price"=> 55,
            "img"=> "https://shop.mancity.com/dw/image/v2/BDWJ_PRD/on/demandware.static/-/Sites-master-catalog-MAN/default/dw96c87297/images/large/701221508001_pp_01_mcfc.png?sw=1600&sh=1600&sm=fit"
            ],
           [
            "id"=> 02, "name"=> "Manchester City Football Shorts 22/23", "price"=> 25,
            "img"=> "https://shop.mancity.com/dw/image/v2/BDWJ_PRD/on/demandware.static/-/Sites-master-catalog-MAN/default/dw32b06546/images/large/701221544001_pp_01_mcfc.png?sw=1600&sh=1600&sm=fit"
           ],
           [
            "id"=> 03, "name"=> "Manchester City Away Jersey 2022/23", "price"=> 55,
            "img"=> "https://shop.mancity.com/dw/image/v2/BDWJ_PRD/on/demandware.static/-/Sites-master-catalog-MAN/default/dw7de9ea4c/images/large/701221525001_pp_01_mcfc.png?sw=1600&sh=1600&sm=fit"
           ],
           [
            "id"=> 04, "name"=> "Manchester City Football Shorts 22/23", "price"=> 25,
            "img"=> "https://shop.mancity.com/dw/image/v2/BDWJ_PRD/on/demandware.static/-/Sites-master-catalog-MAN/default/dw6b19fbb0/images/large/701221544002_pp_01_mcfc.png?sw=1600&sh=1600&sm=fit"
           ],
           [
            "id"=> 05, "name"=> "Manchester City Goalkeeper Jersey 22/23 Long", "price"=> 60,
            "img"=> "https://shop.mancity.com/dw/image/v2/BDWJ_PRD/on/demandware.static/-/Sites-master-catalog-MAN/default/dw53bf6bf6/images/large/701221540002_pp_01_mcfc.png?sw=1600&sh=1600&sm=fit"
           ],
           [
            "id"=> 06, "name"=> "Manchester City Goalkeeper Shorts 22/23", "price"=> 25,
            "img"=> "https://shop.mancity.com/dw/image/v2/BDWJ_PRD/on/demandware.static/-/Sites-master-catalog-MAN/default/dw024c546c/images/large/701221541002_pp_01_mcfc.png?sw=1600&sh=1600&sm=fit"
           ],
           [
            "id"=> 07, "name"=> "Manchester City 3rd Jersey 2022/23", "price"=> 55,
            "img"=> "https://shop.mancity.com/dw/image/v2/BDWJ_PRD/on/demandware.static/-/Sites-master-catalog-MAN/default/dwefab6d41/images/large/701221533001_pp_01_mcfc.png?sw=1600&sh=1600&sm=fit"
           ],
           [
            "id"=> 11, "name"=> "Manchester City Football Shorts 22/23", "price"=> 25,
            "img"=> "https://shop.mancity.com/dw/image/v2/BDWJ_PRD/on/demandware.static/-/Sites-master-catalog-MAN/default/dw8cc85472/images/large/701221544003_pp_01_mcfc.png?sw=1600&sh=1600&sm=fit"
           ],
           [
            "id"=> 12, "name"=> "Manchester City Goalkeeper Jersey 22/23 Long", "price"=> 60,
            "img"=> "https://shop.mancity.com/dw/image/v2/BDWJ_PRD/on/demandware.static/-/Sites-master-catalog-MAN/default/dw6324036c/images/large/701221540003_pp_01_mcfc.png?sw=1600&sh=1600&sm=fit"
           ],
           [
            "id"=> 10, "name"=> "Manchester City Goalkeeper Shorts 22/23", "price"=> 25,
            "img"=> "https://shop.mancity.com/dw/image/v2/BDWJ_PRD/on/demandware.static/-/Sites-master-catalog-MAN/default/dw9783ec4e/images/large/701221541003_pp_01_mcfc.png?sw=1600&sh=1600&sm=fit"
           ],
        ];
        ?>

        <table width=1000, border=2><tr align=center bgcolor=#b042ff>
                <th>id</th>
                <th>name</th>
                <th>price</th>
                <th>img</th>
                </tr>

        <?php foreach($Myproduct as $value){
             $r = rand(0,256);
             $g = rand(0,256);
             $b = rand(0,256);
             $Style = " style='color:rgb($r,$g,$b)' ";
            ?>
            <tr align=center bgcolor=#FFFDD0>  
                <td <?=$Style?>><?=$value['id']?></td>
                <td <?=$Style?>><?=$value['name']?></td>
                <td <?=$Style?>><?=$value['price']?></td>
                <td <?=$Style?>><img width=500 height=400 src = <?=$value['img']?> ></td>
                </tr>
        <?php } ?>

        
    </body>
    
</html> 