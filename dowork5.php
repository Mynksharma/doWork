<?php require 'common.php'; 
    $person=(isset($_GET['per']) ? $_GET['per'] : '');
    if($person=='rakshit'){
        $sql='select rem from reminder where perid=1';
    }
    else if($person=='veer'){
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
    <link rel="stylesheet" href="css/dowork3.css" />
    <title>Reminders</title>
</head>
<body>
    <div id="header">
        <img src="images/clock.png" style="width:30px;height:30px;vertical-align: middle;" alt="clock" /> 
        <span style="font-family: 'Anton', sans-serif;vertical-align: middle;font-size:20px;">
           <a href="index.php" style="text-decoration:none;color:#555;cursor:pointer;">DoWork</a>
        </span>
    </div>
    <div style="height:400px;width:100%;position:relative;">
        <div id="content">
         <h2 style="letter-spacing:2px;">Reminders</h2>
           <div style="height:240px;width:90%;margin:auto;color:red;font-family:monospace;font-weight:bold">
           <?php while($r=mysqli_fetch_array($result)){?>
                <p><?php echo $r['rem'];?></p>
           <?php }
           if($num==0){
         echo '<h4 style="font-family:monospace;">No data available..</h4>';
         }
         ?>
      
           </div>
           <h4><a href="dowork2.php?per=<?php echo $person;?>" style="text-decoration:none;color:#6a5dd4;letter-spacing:2px;cursor:pointer;">Back</a></h4>      </div>
        </div>
</body>
</html>