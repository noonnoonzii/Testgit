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
        //Ex3 Array Multivers มี2มิติขึืนไป ให้แสดง ทั้ง ชื่อวง จำนวนคน และค่ายของวง 

        //name      | much  |Ent.        |
        //Redvelvet | 5     | SM Ent     |
        //Fromis_9  | 9     |S+Music Ent |
        //MAMAMOO   | 4     |RBW Ent.     |
        //Everglow  | 6     |YH Ent.     |

        $arr = array (
            array("Redvelvet" , 5 , "SM Ent. "),
            array("Feomis_9", 9 , "S+Music Ent."),
            array("MAMAMOO", 4 , "RBW Ent."),
            array("Everglow", 6 , "YH Ent."),
        );
        echo $arr [0][0]." have a member is ".$arr[0][1]." and She is Girl Grop in ".$arr[0][2];
        echo "<br>";
        echo $arr [1][0]." have a member is ".$arr[1][1]." and She is Girl Grop in ".$arr[1][2];
        echo "<br>";
        echo $arr [2][0]." have a member is ".$arr[2][1]." and She is Girl Grop in ".$arr[2][2];
        echo "<br>";
        echo $arr [3][0]." have a member is ".$arr[3][1]." and She is Girl Grop in ".$arr[3][2];
        echo "<br>";

        for($row = 0 ; $row <= 4; $row++){

        }
    ?>
</body>
</html>