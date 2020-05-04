<?php require 'common.php'; 
    $person=(isset($_GET['per']) ? $_GET['per'] : '');
    if($person=='rakshit'){
        $sql='select rem from reminder where perid=1';
    }
    else{
        $sql='select rem from reminder where perid=2';
    }
    $result=mysqli_query($con,$sql);
     $num=mysqli_num_rows($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no">
    <link rel="icon" type="image/png" href="images/clock.png" >
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/dowork2.css" />
    <title>Work</title>
</head>
<body>
    <div id="header">
        <img src="images/clock.png" style="width:30px;height:30px;vertical-align: middle;" alt="clock" /> 
        <span style="font-family: 'Anton', sans-serif;vertical-align: middle;font-size:20px;">
           <a href="index.php" style="text-decoration:none;color:#555;cursor:pointer;">DoWork</a>
        </span>
    </div>
    <div style="position:relative;width:100%;height:400px">
        <div id="content">       <a href="dowork3.php?per=<?php echo $person?>" style="text-decoration:none;color:#656565;">
            <div class="button" style="top:0px;">
         My Diary
            </div></a>
            <a href="dowork4.php?per=<?php echo $person?>" style="text-decoration:none;color:#656565;">
            <div class="button" style="top:80px;">
           Test scores
            </div></a>
            <div class="button" style="top:160px;">
            <?php if($num!=0){?>
               <span style="height:20px;width:20px;padding:5px;border-radius:50%;box-shadow:0px 0px 0px 4px #ecf0f3,5px 5px 9px #545454,-5px -5px 9px #ffffff;background-color:#f59a90;position:absolute;left:-10px;top:-10px;font-size:15px;"><?php echo $num;?></span><?php } ?>
                <a href="dowork5.php?per=<?php echo $person?>" style="text-decoration:none;color:#656565;">Reminders</a>
            </div>
        </div>
    </div>
</body>
</html>