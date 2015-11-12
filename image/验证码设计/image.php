<?php
    session_start();
    if(isset($_POST['submit'])){
        if(trim($_POST["test"]) == $_SESSION['validationcode']){
            echo "提交成功<br>";
        }else{
            echo '<font color = "red">验证码输入错误!!<br></font>' ;
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Image</title>
    <meta   http-equiv="content-type" content="text/html; charset=utf-8">
    <script>
        function newgdcode(obj, url){
            obj.src = url + '?nowtime='+new Date().getTime();
        }
    </script>
</head>
<body>
    <img src="imgcode.php" alt="看不清楚，换一张" style="cursor: pointer;" onclick="javascript: newgdcode(this, this.src);">
    <form method="POST" action="image.php">
        <input type="text" name="test"></br>
        <input type="submit" name="submit" value="提交">
    </form>
</body>
</html>