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
        //Ex2 Array Associative เมมเบอร์ ของ แต่ล่ะวง  มาแสดงผล ทั้งชื่อและวง

        $mylove = array("Seulgi" => "Redvelvet", "Moonbyul" => "MAMAMOO", "Gyuri" => "fromis_9");
        
        echo "My Love is ".$mylove["Moonbyul"];
        echo "<br>";

        foreach($mylove as $name => $group){
            echo "My love is ".$name ." She is ".$group." group" ; 
            echo "<br>";
        }

    ?>
</body>
</html>