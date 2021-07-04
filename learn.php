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
    //EX1 loop array ทั้งหมด 5 ครั้งโดยให้แสดงทุกชื่อลลัพธ์ของ Array โดยใช้ Indexed Array
        $rvv;
        $rvv[0] = "irene";
        $rvv[1] = "seulgi";
        $rvv[2] = "wendy";
        $rvv[3] = "joy";
        $rvv[4] = "yeri";
        $costrvv = count ($rvv);
        echo "Red velvet member cost is ".$costrvv."<br>";
            for($x = 0 ; $x < $costrvv ; $x++){
                echo $rvv[$x]."<br>" ;


            }
        //$rvv = array(irene , seulgi , wendy , joy , yeri);



    ?>
</body>
</html>