<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="p2.php" >
        <lable>Enter units</lable>
        <input type="text" name="units" placeholder="Enter units" required>
        <input type="submit" value="calculate">
    </form>
    <?php
    if(isset($_POST["units"]))
        {
        $units=$_POST["units"];
        if($units<=100)
            {
            $bill=$units*5;
        }
        elseif($units<=200)
            {
            $bill=(100*5)+(($units-100)*7);
        }
        else
        {
            $bill=(100*5)+(100*7)+(($units-200)*10);
        }

        echo ("<h2>Total bill is: ".$bill."</h2>");
    }
    ?>
    
</body>
</html>